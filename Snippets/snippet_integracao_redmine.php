<?php
                                #################################### SCRIPT #########################################
                                #																					#
                                # 1. CAPTURA TODAS AS SOLICITAÇÕES DA 1° PÁGINA DA GRID								#
                                # 2. ITERA SOLICITAÇÕES QUE ATENDAM AS 3 CONDIÇÕES:									#
                                #		I - TENHAM 'OS_PARCEIRO'													#
                                #		II - SEJAM DA CATEGORIA 'SISTEMA'											#
                                #		III - ESSE SISTEMA SEJA 'SCI'												#
                                # 3. CHAMA END-POINT DO SISTEMA 'REDMINE' BASEANDO-SE NO N° DA OS					#
                                # 4. ITERA O RETORNO EM XML SOMENTE SE '$obj_data_andamento > $obj_data_historico'	#
                                # 5. INSERE HISTÓRICO DA MOVIMENTAÇÃO DE SUA RESPECTIVA SOLICITAÇÃO					#
                                # 6. REGISTRA LOGS DA INSERÇÃO														#
                                # 7. ENVIA E-MAIL AO SOLICITANTE E AO RESPONSÁVEL, NOTIFICANDO A MOVIMENTAÇÃO		#
                                #	 (somente se $agulha = "para <i>Semae  Piracicaba</i>")							#
                                # 8. REGISTRA LOGS DE ERROS															#
                                # 9. CONTRÓI MENSAGEM INFORMANDO RESULTADO DA SINCRONIZAÇÃO							#
                                #																					#
                                #####################################################################################

$arrSolicitacoes = [arraySolicitacoes]; //foi preciso transportar para uma variável global porque o botão 'sincronizar_SCI' não recebia o array '$arrSolicitacoes' e nem o campo {solicitacoes}
sc_reset_global([arraySolicitacoes]);

$usuario = $_SESSION['usr_login'];
$userIP = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : (isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
$sistemasSCI = array(3,16,26,27); //IDs encontrados na tabela HELP_SISTEMAS
$array_solicit_Movimentadas = array();
$countSolicit = 0;
$countSistema = 0;
$erros = array('countErrors'=>0);

foreach($arrSolicitacoes as $objSolicitacao) {
	$countSolicit ++;
	$isMovimentada = false;

/*
	if (in_array($objSolicitacao->sistema, $sistemasSCI) && !empty($objSolicitacao->os_parceiro)) {
		$url = "http://187.94.98.154:3001/redmine/issues/$objSolicitacao->os_parceiro.atom?key=df6e8470c1cab68c7d87dd484e434eac1477629e";
		$headers = get_headers($url);
		$http_code = substr($headers[0], 9, 3); //armazena o status de resposta da requisição

		if ($http_code != 200) {
			$erros['countErrors']++;
			$erros[] = array(
				'Mensagem' => "Ao executar o script que sincroniza as Ordens de Serviço do parceiro ".$objSolicitacao->descricao_parceiro.", foi encontrado o seguinte erro: Não foi encontrado o arquivo XML através da URL informada.",
				'codeStatusHTTP' => $http_code,
				'idSolicitacao' =>  $objSolicitacao->idSolicitacao, 
				'idHistorico' =>  $objSolicitacao->idHistorico
			);			
			continue;
		}
		
		$XML_SCI = @simplexml_load_file($url); // constrói o objeto a partir da biblioteca SimpleXML
 */	

	if (in_array($objSolicitacao->sistema, $sistemasSCI) && !empty($objSolicitacao->os_parceiro)) {
		$countSistema ++;
		$url = "http://187.94.98.154:3001/redmine/issues/$objSolicitacao->os_parceiro.atom?key=df6e8470c1cab68c7d87dd484e434eac1477629e"; //testar com OS nº 17568

		try {
			$curlHandle = curl_init($url);
			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curlHandle, CURLOPT_TIMEOUT, 40);
			$response = curl_exec($curlHandle);
			if ($response === false) {
				throw new Exception("Erro cURL: " . curl_error($curlHandle), curl_errno($curlHandle));
			}

			$http_code = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
			if ($http_code != 200) {
				throw new Exception("Não foi encontrado o arquivo XML através da URL informada.", $http_code);
			}

			$XML_SCI = simplexml_load_string($response); // constrói o objeto a partir da biblioteca SimpleXML
			if ($XML_SCI === false) {
				throw new Exception("Falha ao carregar XML.");
			}
			
			curl_close($curlHandle);
		} catch (Exception $e) {
			$erros['countErrors']++;
			$erros[] = [
				'Mensagem'        => "Ao executar o script que sincroniza as Ordens de Serviço do parceiro $objSolicitacao->descricao_parceiro, foi encontrado o seguinte erro: " . $e->getMessage(),
				'codeStatusHTTP'  => $e->getCode(),
				'idSolicitacao'   => $objSolicitacao->idSolicitacao, 
				'idHistorico'     => $objSolicitacao->idHistorico
			];
			continue;
		}
	
		foreach ($XML_SCI->entry as $andamento) {
			$obj_data_andamento = new DateTime($andamento->updated, new DateTimeZone('UTC'));
			date_default_timezone_set("America/Sao_Paulo"); // configura o fuso horário do servidor para a localidade do SEMAE
			$obj_data_historico = new DateTime($objSolicitacao->data_historico, new DateTimeZone(date_default_timezone_get()));
			
			if ($obj_data_andamento > $obj_data_historico) {
				$isMovimentada = true;
				
				sc_begin_trans();
				
				$obj_data_andamento->setTimezone(new DateTimeZone(date_default_timezone_get())); //ou: $obj_data_andamento->modify('-3 hours');
				$data_andamento = $obj_data_andamento->format('Y-m-d H:i:s');
				$dataf = $obj_data_andamento->format('d/m/d H\hi\m\i\n');
				$responsavel = mb_convert_encoding($andamento->author->name, "ISO-8859-1", "UTF-8");		
				$mensagem = "$dataf - $responsavel:<br>";
				$mensagem .= str_replace("'", "''", mb_convert_encoding($andamento->content, "ISO-8859-1", "UTF-8"));
				
				$palheiro = mb_convert_encoding($andamento->content, "ISO-8859-1", "UTF-8");
				$agulha1 = "para <i>Semae  Piracicaba</i>";
				$agulha2 = "para <i>Leticia / Solida</i>";
				$situacaoSolicit  = ( (strpos($palheiro, $agulha1) !== false) || (strpos($palheiro, $agulha2) !== false) ) ? 13 : 12; //RETORNO e MOVIMENTAÇÃO
				
				$stmtInsertHistoricos = "
					INSERT INTO HELP_HISTORICOS (
						ID_HISTORICO,
						DATA_INSERCAO,
						FK_SOLICITACAO,
						FK_SOLICITANTE,
						FK_ENCAMINHADA_POR,
						FK_RESPONSAVEL,
						FK_STATUS,
						MENSAGEM,
						FK_PARCEIRO,
						OS_PARCEIRO
					) VALUES (
						SEQ_HELP_HISTORICOS.NEXTVAL,
						TIMESTAMP '$data_andamento',
						'$objSolicitacao->idSolicitacao',
						'$objSolicitacao->solicitante',
						'$objSolicitacao->responsavel',
						'$objSolicitacao->responsavel',
						'$situacaoSolicit',
						'$mensagem',
						'$objSolicitacao->id_parceiro',
						'$objSolicitacao->os_parceiro'
					)
				";
				sc_exec_sql ($stmtInsertHistoricos);
				
				########################### REGISTRA LOGS ###########################
				$query_last_id_inserted_help_historicos = "
					SELECT SEQ_HELP_HISTORICOS.CURRVAL FROM DUAL
				";
				sc_lookup(datasetId, $query_last_id_inserted_help_historicos);
				if ({datasetId} === false) {
					errorMessage('ERRO! Não foi possível consultar o identificador recém-inserido do histórico da solicitação.', 4);
				} else {
					$lastIdHistorico = {datasetId[0][0]};
				}

				$log = str_replace(array("'", "SEQ_HELP_HISTORICOS.NEXTVAL"), array("''", $lastIdHistorico), "scriptSQL:$stmtInsertHistoricos");
				
				$stmtInsertLog = "
					INSERT INTO SEGURANCA_LOG VALUES (
						ID_LOG.nextval,
						SYSDATE,
						'$usuario',
						'HELP_SOLICITACOES_ABERTAS_G',
						'Scriptcase',
						'$userIP',
						'insert',
						'$log',
						NULL
					)
				";
				sc_exec_sql($stmtInsertLog);
				
				sc_commit_trans();

				########################### ENVIA E-MAIL NOTIFICANDO O SOLICITANTE E O RESPONSÁVEL PELA SOLICITAÇÃO ###########################
				if ($situacaoSolicit == 13) { //RETORNO(PARCEIRO)
					$queryEmailResp = "
						SELECT 
							EMAIL 
						FROM
							RH_FUNCIONARIOS 
						WHERE 
							COD_FUNCIONARIO  = '$objSolicitacao->responsavel'
					";
					sc_lookup(datasetEmailResp, $queryEmailResp);
					if ({datasetEmailResp} === false) {
						errorMessage("Não foi possível consultar o email do responsável pela solicitação.", 5);
					}
					if (!empty({datasetEmailResp[0][0]}) && ({datasetEmailResp[0][0]} != $objSolicitacao->email_solicitante)) {
						$destinatarios = array($objSolicitacao->email_solicitante, {datasetEmailResp[0][0]});
					} else {
						$destinatarios = array($objSolicitacao->email_solicitante);
					}
					
					$assunto = 'Resposta de ' . $objSolicitacao->descricao_parceiro . ' referente à solicitação ' . $objSolicitacao->codigoChamado . ' - ' . $objSolicitacao->assunto;
					$titulo = 'Sistema de Solicitações';
					$subtitulo = 'Divisão de Tecnologia da Informação';
					// $mensagem = $palheiro; //Decidiu-se por padronizar as mensagens de e-mail	
					$mensagem = "<p>Informamos que sua solicitação <strong>" . $objSolicitacao->codigoChamado . "</strong>, que atualmente está sendo executada pelo nosso parceiro <strong>" . $objSolicitacao->descricao_parceiro . "</strong>, foi movimentada.</p>
								 <p>Para acompanhar o andamento da resolução desse problema, acesse o módulo Solicitações presente no Sistema de Gestão Integrado (SGI).</p>
								 <br>
								 <p>Lembramos que este é um e-mail automático e não é monitorado para respostas. Portanto, se você tiver alguma dúvida ou precisar de assistência adicional, por favor, utilize o sistema SGI para entrar em contato conosco.</p>";
					$mensagem = bodyBuilder($titulo, $subtitulo, $mensagem);
					$alias = 'Solicitações || DTI';

					if (!function_exists('enviarEmail')) {
						sc_include("enviarEmail.php", "prj");
					}
					enviarEmail($destinatarios, $assunto, $mensagem, $alias);
				}
			}
		}
	}

	if ($isMovimentada) {
		$array_solicit_Movimentadas[] = $objSolicitacao->codigoChamado;
	}
}

if ($erros['countErrors'] > 0) {
	$logErrors = str_replace("'", "''", var_export($erros, true));
	$messageToInsert = '';
	for ($i = 0; $i < (strlen($logErrors)/3000); $i++) { //varchar2 aceita, no máximo, 4000 caracteres
		$messageToInsert .= ($i == 0) ? '' : ' || ';
		$messageToInsert .= "TO_CLOB('" . substr($logErrors, 4000 * $i, 4000) . "')";
	}
	sc_begin_trans();
	$stmtInsertLogErrors = "
		INSERT INTO SEGURANCA_LOG VALUES (
			ID_LOG.nextval,
			SYSDATE,
			'$usuario',
			'HELP_SOLICITACOES_ABERTAS_G',
			'Scriptcase',
			'$userIP',
			'insert',
			$messageToInsert,
			NULL
		)
	";
	sc_exec_sql($stmtInsertLogErrors);
	sc_commit_trans();
}

$vocativo = "<p>Magnânimo " . ucwords(strtolower(buscarFuncionarioLogado()['nome'])) . ",</p>";
$titulo = "Os históricos das $countSolicit solicitações <ins>desta</ins> página foram sincronizados!<br>$countSistema solicitações foram analisadas.";
$quantMovimentadas = count($array_solicit_Movimentadas);
$msg = $quantMovimentadas == 0 ? "<strong>Nenhuma</strong> solicitação foi movimentada." : ($quantMovimentadas == 1 ? "<strong>$quantMovimentadas</strong> solicitação foi movimentada!" : "<strong>$quantMovimentadas</strong> solicitações foram movimentadas!");
if ($quantMovimentadas > 0) {
	foreach ($array_solicit_Movimentadas as $solicitacao) {
		$msg .= "<br>$solicitacao";
	}	
}
$info_erro = ($erros['countErrors'] > 0) ? "<span style='color:red;font-weight:bold'>ATENÇÃO! <ins>" . $erros['countErrors'] . "</ins> erros encontrados! Verifique os logs do sistema.</span>" : '';

echo "
	<div id='mensagem_sincronizacao'>
		<p>
			$vocativo
		</p>
		<p>
			$info_erro
		</p>
		<p>
			$titulo
		</p>
		<p>
			$msg
		</p>
	</div>
";

?>

<script>
	window.parent.document.querySelector('div#TB_window').style.setProperty('padding', '10px');
	window.parent.document.querySelector('div#TB_window').style.setProperty('width', 'auto');
	window.parent.document.querySelector('div#TB_window').style.setProperty('height', 'auto');
	window.parent.document.querySelector('div#TB_window').style.setProperty('border-radius', '20px');
	
	window.parent.document.querySelector('div#TB_window >#TB_iframeContent').style.setProperty('width', '360');
	window.parent.document.querySelector('div#TB_window >#TB_iframeContent').style.setProperty('height', '280');
	
	window.document.querySelector('div#mensagem_sincronizacao').style.setProperty('text-align', 'center');
	window.document.querySelector('div#mensagem_sincronizacao').style.setProperty('font-size', 'medium');
</script>

<?php
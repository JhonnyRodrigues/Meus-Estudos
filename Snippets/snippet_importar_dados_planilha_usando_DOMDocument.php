<?php
#ATENÇÃO! É importante que o arquivo importado esteja no formado XML
// require_once("conexaoBD.php");
$dados = (isset($_FILES['arquivo'])) ? $_FILES['arquivo'] : NULL; //$_FILES is an associative array containing items uploaded via HTTP POST method, o parâmetro 'arquivo' vem do atributo 'name' do input
// var_dump($dados);

if (!empty($_FILES['arquivo']["tmp_name"])) {
	$arquivo = new DOMDocument(); //instancia um objeto da classe que manipula XMLs
	$arquivo->load($_FILES['arquivo']['tmp_name']);
	// echo '<pre>';								 var_dump($arquivo);
	// echo '###################################';	 var_dump($_FILES['arquivo']);
	// echo '###################################';	 var_dump($_FILES['arquivo']['tmp_name']);
	// exit;

	$linhas = $arquivo->getElementsByTagName('Row');
	// var_dump($linhas);exit;

	$primeira_linha = true;
	$num_linha = 667;

	foreach ($linhas as $linha) {
		if (!$primeira_linha) {
			// echo "<h2>linha: $num_linha</h2>";

			// var_dump();exit;

			$dpto = (is_object($linha->getElementsByTagName('Data')->item(0))) ? $linha->getElementsByTagName('Data')->item(0)->nodeValue : 'NULL';
			// $dpto = mb_convert_encoding($dpto, "ISO-8859-1", "UTF-8");
			// echo "Departamento: $dpto <br>";
			switch ($dpto) {
				case 'PJur':
					$dpto = 3;
					break;
				case 'DA':
					$dpto = 5;
					break;
				case 'DF':
					$dpto = 21;
					break;
				case 'DEPLAN':
					$dpto = 77;
					break;
				case 'DOH':
					$dpto = 43;
					break;
				case 'DOM':
					$dpto = 52;
					break;
				case 'DCCOT':
					$dpto = 36;
					break;
				case 'DTE':
					$dpto = 78;
					break;
				case 'DTA':
					$dpto = 66;
					break;
				case 'GReg.':
					$dpto = 79;
					break;
				default:
					$dpto = 'NULL';
			}
			// echo "Departamento:$dpto<br>";

			$divisao = (is_object($linha->getElementsByTagName('Data')->item(1))) ? $linha->getElementsByTagName('Data')->item(1)->nodeValue : 'NULL';
			// echo "Divisão: $divisao <br>";
			// echo "Divisão:$divisao<br>";

			$item = (is_object($linha->getElementsByTagName('Data')->item(2))) ? $linha->getElementsByTagName('Data')->item(2)->nodeValue : 'NULL';
			// echo "Item: $item <br>";
			// echo "Item:$item<br>";

			$descricao = (is_object($linha->getElementsByTagName('Data')->item(3))) ? $linha->getElementsByTagName('Data')->item(3)->nodeValue : 'NULL';
			$dpto = mb_convert_encoding($dpto, "ISO-8859-1", "UTF-8");
			$descricao = str_replace("'", "''", $descricao);
			// echo "Descrição: $descricao <br>";
			// echo "Descrição:$descricao<br>";

			$quantidade = (is_object($linha->getElementsByTagName('Data')->item(4))) ? $linha->getElementsByTagName('Data')->item(4)->nodeValue : 'NULL';
			// echo "Quantidade: $quantidade <br>";
			$quantidade = (is_numeric($quantidade)) ? $quantidade : 'NULL';
			// echo "Quantidade:$quantidade<br>";

			$valor = (is_object($linha->getElementsByTagName('Data')->item(5))) ? $linha->getElementsByTagName('Data')->item(5)->nodeValue : 'NULL';
			// echo "Valor: $valor <br>";
			$valor = (is_numeric($valor)) ? $valor : 'NULL';
			// echo "Valor:$valor<br>";

			$data = (is_object($linha->getElementsByTagName('Data')->item(6))) ? $linha->getElementsByTagName('Data')->item(6)->nodeValue : 'NULL';
			// echo "Data: $data <br>";
			$data = str_replace("T00:00:00.000", "", $data);
			// echo "Data:$data<br>";

			$prioridade = (is_object($linha->getElementsByTagName('Data')->item(7))) ? $linha->getElementsByTagName('Data')->item(7)->nodeValue : 'NULL';
			// echo "Prioridade: $prioridade <br><hr>";
			switch ($prioridade) {
				case 'Alta':
				case 'alta':
					$prioridade = 1;
					break;
				case 'Média':
				case 'Media':
				case 'média':
				case 'media':
					$prioridade = 2;
					break;
				case 'Baixa':
				case 'baixa':
					$prioridade = 3;
					break;
				default:
					$prioridade = 'NULL';
			}
			// echo "Prioridade:$prioridade<br><hr>";
			// exit;
			#Inserir o registro no Banco de Dados
			$stmt_insert = "
																					INSERT INTO PAC_DEMANDA (ID_DEMANDA, QUANTIDADE, DATA_COMPRA_CONTRATACAO, PRIORIDADE, NECESSIDADE, VALOR_TOTAL, FK_DEPARTAMENTO_RESPONSAVEL,SITUACAO
																					) VALUES (
																						$num_linha,$quantidade,DATE'$data',$prioridade,'$descricao',$valor,$dpto,2);
																						";
			echo $stmt_insert;
			echo '<br><hr>';
			// $resultado_stmt_insert = mysqli_query($conexao, $stmt_insert);
			// oci_execute...........
			// sc_exec_sql($stmt_insert);
		}
		$primeira_linha = false;
		$num_linha++;
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Importar dados do Excel</title>
	<link rel="shortcut icon" href="../grp__NM__bg__NM__ndice.png" type="image/x-icon">
</head>

<body>
	<h1>Importar Dados de Planilha</h1>
	<form method="post" action="" enctype="multipart/form-data">
		<!-- se o parametro 'action' estiver vazio, o submit do formulario chama a si mesmo -->
		<!--o parametro 'enctype="multipart/form-data"' informa que o formulario trabalhara com arquivos-->
		<label for="">Arquivo (em formato XML):</label>
		<input type="file" name="arquivo"><br><br>
		<input type="submit" value="Enviar">
	</form>
</body>

</html>
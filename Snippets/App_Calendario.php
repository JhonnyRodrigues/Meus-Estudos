<?php

####################################################################################################################################
#################################################### APLICACAO CALENDARIO_JSON #####################################################
####################################################################################################################################
$opcoes = ( !isset($_POST['opts']) ) ? 0 : $_POST['opts'];

$queryGetDados = "
	SELECT
		D.ID_DEMANDA,
		D.CODIGO_COMPLETO_MATERIAL,
		F.NOME_FUNCIONARIO,
		L.NOME_LOTACAO,
		D.VALOR_TOTAL,
		D.DATA_COMPRA_CONTRATACAO,
		D.FK_DEPARTAMENTO_RESPONSAVEL,
		D.SITUACAO
	FROM
		PAC_DEMANDA D
	JOIN
		RH_LOTACOES L ON L.COD_LOTACAO = D.FK_LOTACAO_SOLICITANTE
	JOIN
		RH_FUNCIONARIOS F ON F.COD_FUNCIONARIO = D.FK_SOLICITANTE
	WHERE 
		--D.FK_DEPARTAMENTO_RESPONSAVEL IN ($opcoes)
		--(3,5,21,36,43,52,66,77,78,79,89,90)
	--AND 
		D.SITUACAO IN ($opcoes)
		--(1,2,3)
	ORDER 
		BY D.ID_DEMANDA
";
sc_lookup_field(datasetDados, $queryGetDados);
if ({datasetDados} === false) {
	errorMessage("Erro ao coletar os dados.", 1);
}

$resultado = array(); /*inicialize suas variáveis*/

for ($i = 0 ; $i < count({datasetDados}); $i++) { 
	$idevento = {datasetDados[$i]['ID_DEMANDA']}; 
	
	$descricao = {datasetDados[$i]['ID_DEMANDA']} . ' - ' . {datasetDados[$i]['CODIGO_COMPLETO_MATERIAL']}
	. "\n" . {datasetDados[$i]['NOME_FUNCIONARIO']}
	. "\n" . {datasetDados[$i]['NOME_LOTACAO']}
	. "\nR$ " . number_format({datasetDados[$i]['VALOR_TOTAL']}, 2, ",", ".");
	
	$situacao = {datasetDados[$i]['SITUACAO']};
	
    // $departamento = {datasetDados[$i]['FK_DEPARTAMENTO_RESPONSAVEL']};

	// switch ($departamento) {
	// 	case 3: /*Procuradoria Jurídica*/
	// 		$color = 'orchid';
	// 	break;
	// 	case 5: /*Departamento Administrativo*/
	// 		$color = 'purple';
	// 	break;
	// 	case 21: /*Departamento Financeiro*/
	// 		$color = 'indigo';
	// 	break;
	// 	case 36: /*Departamento Contrução Civil*/
	// 		$color = 'navy';
	// 	break;
	// 	case 43: /*Departamento Obras Hidráulicas*/
	// 		$color = 'steelblue';
	// 	break;
	// 	case 52: /*Departamento Operação e Manutenção*/
	// 		$color = 'teal';
	// 	break;
	// 	case 66: /*Departamento Tratamento de Água*/
	// 		$color = 'green';
	// 	break;
	// 	case 77: /*Departamento Planejamento*/
	// 		$color = 'olive';
	// 	break;
	// 	case 78: /*Departamento Tratamento de Esgoto*/
	// 		$color = 'goldenrod';
	// 	break;
	// 	case 79: /*Gerência das Unidades Regionais*/
	// 		$color = 'yellow';
	// 	break;
	// 	case 89: /*Superintendência. Administrativa*/
	// 		$color = 'orange';
	// 	break;
	// 	case 90: /*Superintendência Operacional*/
	// 		$color = 'tomato';
	// 	break;
	// 	default:
	// 		$color = 'gray';
	// }
	
	switch ($situacao) {
		case 1: //em homologação
			$color = 'steelblue';
		break;
		case 2: //aguardando data
			$color = 'lightcoral';
		break;
		case 3: //comprado
			$color = 'green';
		break;
		case 4: //cancelado
			$color = 'gray';
		break;
		default:
			$color = 'navy';
	}

    $resultado[] = array(
		'id' => $idevento,
		'title' => mb_convert_encoding($descricao, "UTF-8", "ISO-8859-1"),
		'start' => {datasetDados[$i]['DATA_COMPRA_CONTRATACAO']},
		'end' => {datasetDados[$i]['DATA_COMPRA_CONTRATACAO']},
		'allDay' => true,
		'color' => $color,
		'className' => 'style-title'
    );

}

echo json_encode($resultado);


####################################################################################################################################
####################################################### APLICACAO CALENDARIO #######################################################
####################################################################################################################################
echo "<link href='" . $this->Ini->path_prod . "/third/jquery_plugin/fullcalendar/fullcalendar.css' rel='stylesheet' />";
echo "<link href='" . $this->Ini->path_prod . "/third/jquery_plugin/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />";
echo "<link href='" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/thickbox.css' rel='stylesheet' media='screen' />";

echo "<script type='text/javascript' src='" . $this->Ini->path_prod . "/third/jquery/js/jquery.js'></script>";
echo "<script type='text/javascript' src='" . $this->Ini->path_prod . "/third/jquery/js/jquery-ui.js'></script>";

echo "<script>var sc_pathToTB = '" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/'; /* VAR com path do thickbox*/</script>";
echo "<script type='text/javascript' src='" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/thickbox-compressed.js'></script>";

echo "<script type='text/javascript' src='" . $this->Ini->path_prod . "/third/jquery_plugin/fullcalendar/fullcalendar.min.js'></script>";
echo "<script type='text/javascript' src='" . $this->Ini->path_prod . "/third/jquery_plugin/fullcalendar/packages/core/index.global.min.js'></script>";
echo "<script type='text/javascript' src='" . $this->Ini->path_prod . "/third/jquery_plugin/fullcalendar/packages/core/locales-all.global.min.js'></script>";
echo "<script type='text/javascript' src='" . $this->Ini->path_prod . "/third/jquery_plugin/fullcalendar/packages/moment/moment.js'></script>";
echo "<script type='text/javascript' src='" . $this->Ini->path_prod . "/third/jquery_plugin/fullcalendar/packages/moment/index.global.min.js'></script>";
echo "<script type='text/javascript' src='" . $this->Ini->path_prod . "/third/jquery_plugin/fullcalendar/packages/google-calendar/index.global.min.js'></script>";
echo "<script type='text/javascript' src='" . $this->Ini->path_prod . "/third/jquery_plugin/fullcalendar/dist/index.global.min.js'></script>";

?>

<style>
	body {
		margin-top: 20px;
		text-align: center;
		font-size: 14px;
		font-family: Helvetica, Arial, Verdana, sans-serif;
	}

	#calendar {
		width: 90vw;
		margin: 0 auto;
	}

	#menu-options {
		margin-bottom: 20px;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: center;
	}

	label {
		padding: 5px 10px;
		border: 3px solid #fff;
		border-radius: 10px;
		color: #fff;
		background-color: #DDD;
		box-shadow: 0 0 20px rgba(0, 0, 0, .2);
		white-space: nowrap;
		cursor: pointer;
		user-select: none;
		transition: background-color .2s, box-shadow .2s;
	}
	label:hover {
		box-shadow: 0 0 20px rgba(0,0,0,.6);
	}

	input {
		appearance: none; /*esconde o markcheck*/
	}
	
/* 	input#pjur:checked+label {
		background-color: orchid;
	}
	input#da:checked+label {
		background-color: purple;
	}
	input#df:checked+label {
		background-color: indigo;
	}
	input#dccot:checked+label {
		background-color: navy;
	}
	input#doh:checked+label {
		background-color: steelblue;
	}
	input#dom:checked+label {
		background-color: teal;
	}
	input#dta:checked+label {
		background-color: green;
	}
	input#dplan:checked+label {
		background-color: olive;
	}
	input#dte:checked+label {
		background-color: goldenrod;
	}
	input#sadm:checked+label {
		background-color: orange;
	}
	input#sope:checked+label {
		background-color: tomato;
	} */
	
	input#homologando:checked+label {
		background-color: steelblue;
	}
	input#aguardando:checked+label {
		background-color: lightcoral;
	}
	input#comprado:checked+label {
		background-color: green;
	}
	input#cancelado:checked+label {
		background-color: gray;
	}	

	.fc-past {
		background-color: #DDD;
	}
	
	.style-title { /* div que renderiza cada evento */
		text-align: center;
    	display: block;
	}
</style>

<script>
	function calendar_reload() {
		$('#calendar').fullCalendar('refetchEvents');
	}

	$(document).ready(function () {

		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		$('#calendar').fullCalendar({
			header: {
				left: '', /* month, agendaWeek, agendaDay, scAgenda */
				center: 'title',
				right: 'prevYear, prev, today, next, nextYear '
			},

			buttonText: {
				prev: '&lt;', /*Botão Previous*/
				next: '&gt;', /*Botão Next*/
				today: 'Hoje', /*Botão Today*/
				month: 'Mês', /*Botão Month*/
				week: 'Semana', /*Botão Month*/
				day: 'Dia', /*Botão Day*/
				agenda: 'Agenda'
			},

			/*TRADUÇÃO DOS MESES E DIAS*/
			monthNames: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
			monthNamesShort: ["JAN", "FEV", "MAR", "ABR", "MAI", "JUN", "JUL", "AGO", "SET", "OUT", "NOV", "DEZ"],
			dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sextou', 'Sabado'],
			dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
			/***************************/

			timeFormat: 'H:mm', /*FORMATO DA HORA*/
			columnFormat: {
				week: 'dddd dd/M', /*Ex: Segunda 09/12*/
				day: 'dddd'  /*Ex: Segunda*/
			},

			titleFormat: {
				// month: '', 
				week: "MMM dd[ yyyy]{ 'a'[ MMM] dd, yyyy}", /*FORMATO DO TITULO NO MODO AGENDA SEMANAL*/
				day: 'dddd, d/M/yyyy' /*FORMATO DO TÍTULO NO MODO DIA*/
			},


			height: 600, /*ALTURA DO CALENDARIO*/

			defaultView: 'month', /*Modo de visualização inicial:  'dayGridWeek', 'timeGridDay', 'listWeek', 'month', 'agendaWeek'*/

			allDaySlot: false, /*Se false, remove opção All Day*/

			editable: true, /*Se false, não permite arrastar e soltar os eventos*/


			/*EXEMPLOS DE ALGUMAS CONFIGURAÇÕES PARA O MODO AGENDA SEMANAL*/
			axisFormat: 'HH:mm', /*FORMATO DA HORA MOSTRADA DO LADO ESQUERDO*/

			minTime: 8, /*LIMITA O INICIO DO HORARIO A SER MOSTRADO A 08:00 (0 a 23)*/
			maxTime: 18, /*LIMITA O FIM DO HORARIO A SER MOSTRADO A 18:00  (0 a 23)*/

			/*events: '../PAC_CALENDARIO_JSON/PAC_CALENDARIO_JSON.php' , AQUI É CHAMADO O ARQUIVO QUE FARÁ O PROCESSAMENTO PHP*/
			events: {
				url: '../PAC_CALENDARIO_JSON/PAC_CALENDARIO_JSON.php',
				type: 'POST',
				data: function () { // a function that returns an object
					return {
						opts: check_selected()
					};
				}
			},

			dayClick: function (date, allDay, jsEvent, view) {
				var diaClicado = $.fullCalendar.formatDate(date, 'yyyy-MM-dd');
				var HoraIni = $.fullCalendar.formatDate(date, 'HH:mm');
				var hoje = $.fullCalendar.formatDate(new Date(), 'yyyy-MM-dd');

				if (hoje > diaClicado) {
					alert("Agendamento não permitido em data pretérita.");
				}
				else {
					tb_show( //funcao da biblioteca "Thickbox" para abrir janela modal
						'',
						'../PAC_DEMANDA_F/PAC_DEMANDA_F.php'
						+ '?par_controle=' + '0'
						+ '&diaClicado=' + diaClicado 
						+ '&HoraIni=' + HoraIni 
						+ '&sc_cal_click_date=' + ''
						+ '&nmgp_outra_jan=' + 'true'
						+ '&nmgp_opcao=' + 'igual'
						+ '&nmgp_url_saida=' + 'modal'
						+ '&TB_iframe=' + 'true'
						+ '&height=' + '550'
						+ '&width=' + '990'
						+ '&modal=' + 'true',
						''
					);
				}
			},

			dayRender: function (date, cell) {
				var maxDate = new Date();
				var daysToAdd = 10;

				maxDate.setDate(maxDate.getDate() + daysToAdd);
				if (maxDate > date) {
					// $(cell).addClass('fc-past');
				}
			},

			eventClick: function (calEvent, jsEvent, view) {
				var idevento = calEvent.id;
				tb_show(
					'', 
					'../PAC_DEMANDA_F/PAC_DEMANDA_F.php'
					+ '?idEvento=' + idevento 
					+ '&sc_cal_click_date=' + ''
					+ '&nmgp_outra_jan=' + 'true'
					+ '&nmgp_url_saida=' + 'modal'
					+ '&TB_iframe=' + 'false'
					+ '&modal=' + 'false'
					+ '&height=' + '550'
					+ '&width=' + '990', 
					''
				);
			}
		});
	});
</script>

<!--<script type="text/javascript" src="<?php echo sc_url_library('prj', 'appointments', 'js/js_appointments.js'); ?>"></script>-->
<script>
	function check_selected() {
		var x = document.getElementsByName("filtro");
		var i;
		var opt = "";
		for (i = 0; i < x.length; i++) {
			if ((x[i].type == "checkbox") && (x[i].checked == true)) {
				if (opt == "") {
					opt = x[i].value
				}
				else {
					opt = opt + "," + x[i].value;
				}
			}
		}
		return opt; //exemplo: "3,5,21,36,43,52,66,77,78,89,90" (lotações)
	}
</script>


<form id='f_opts'>
<!-- 	<div id='menu-options' (a feature de filtrar por setor foi DESCONTINUADA)>
		<input id="pjur" type="checkbox" name="filtro" onclick="calendar_reload();" value="3" checked>
		<label for="pjur">Jurídica</label>

		<input id="da" type="checkbox" name="filtro" onclick="calendar_reload();" value="5" checked>
		<label for="da">Administrativo</label>

		<input id="df" type="checkbox" name="filtro" onclick="calendar_reload();" value="21" checked>
		<label for="df">Financeiro</label>

		<input id="dccot" type="checkbox" name="filtro" onclick="calendar_reload();" value="36" checked>
		<label for="dccot">Contrução Civil</label>

		<input id="doh" type="checkbox" name="filtro" onclick="calendar_reload();" value="43" checked>
		<label for="doh">Obras Hidráulicas</label>

		<input id="dom" type="checkbox" name="filtro" onclick="calendar_reload();" value="52" checked>
		<label for="dom">Operação e Manutenção</label>

		<input id="dta" type="checkbox" name="filtro" onclick="calendar_reload();" value="66" checked>
		<label for="dta">Tratamento de Água</label>

		<input id="dplan" type="checkbox" name="filtro" onclick="calendar_reload();" value="77" checked>
		<label for="dplan">Planejamento</label>

		<input id="dte" type="checkbox" name="filtro" onclick="calendar_reload();" value="78" checked>
		<label for="dte">Tratamento de Esgoto</label>

		<input id="sadm" type="checkbox" name="filtro" onclick="calendar_reload();" value="89" checked>
		<label for="sadm">Superint. Administrativa</label>

		<input id="sope" type="checkbox" name="filtro" onclick="calendar_reload();" value="90" checked>
		<label for="sope">Superint. Operacional</label>
	</div> -->
	<div id='menu-options'>
		<input id="homologando" type="checkbox" name="filtro" onclick="calendar_reload();" value="1" checked>
		<label for="homologando">Em homologação</label> (regra de negócio: não apresentar demandas ainda não aprovadas no calendário)
		
		<input id="aguardando" type="checkbox" name="filtro" onclick="calendar_reload();" value="2" checked>
		<label for="aguardando">Aguardando data</label>
		
		<input id="comprado" type="checkbox" name="filtro" onclick="calendar_reload();" value="3" checked>
		<label for="comprado">Comprado</label>

		<input id="cancelado" type="checkbox" name="filtro" onclick="calendar_reload();" value="4" checked>
		<label for="cancelado">Cancelado</label>
	</div>
</form>

<div id='calendar'></div>
<?php

{} = (empty()) ? 'NULL' : {};
$query = "

";
sc_select(dataset, $query);
if ( {dataset} === false ) {
	exit("Não foi possível consultar .");
	echo "Erro de conexão com o Banco de Dados. Consulta de ??????????? não realizada. Mensagem = " . {datasetExames_erro};
} else {
	while ( !{dataset}->EOF ) {
		$var = {dataset}->fields[''];
		{dataset}->MoveNext();
	}
	{dataset}->Close();
}
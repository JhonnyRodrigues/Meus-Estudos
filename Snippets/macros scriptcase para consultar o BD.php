<?php

$query = "
	SELECT
		CAMPOS
	FROM
		TABELA
	WHERE
		CAMPO = VALOR
";

sc_lookup_field(dataset, $query);
if ({dataset} === false) {
	errorMessage("Não foi possível consultar a rebimboca da parafuseta. Erro: {dataset_erro}", 4);
} else {
	{camposScriptcase} = {dataset[0]['CAMPOS']};
	sc_btn_display('update', 'off');
	sc_ajax_javascript('close_modal');
}

sc_select(dataset, $query);
if ({dataset} === false) {
	exit("Não foi possível consultar a rebimboca da parafuseta. Erro: {dataset_erro}");
} else {
	while (!{dataset}->EOF) {
		$var = {dataset}->fields[''];
		{dataset}->MoveNext();
	}
	{dataset}->Close();
}

/* NOTA: Essas macros fazem uso da biblioteca ADOdb (Database Abstraction Layer for PHP) */

?>
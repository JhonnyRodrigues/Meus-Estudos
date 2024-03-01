<?php

#EXEMPLO DE TRANFERÊNCIA DE LÓGICA DA APLICAÇÃO PARA O BANCO DE DADOS

#COMO ERA:
	################################# BUSCA DEPARTAMENTO RESPONSÁVEL PELA DEMANDA ################################
	$queryDepartamentos = " 
		SELECT 
			COD_LOTACAO,
			NOME_LOTACAO
		FROM 
			RH_LOTACOES 
		WHERE (
			   NOME_LOTACAO LIKE '%PRESID_N%'
			OR NOME_LOTACAO LIKE '%PROCURADORIA%'
			OR NOME_LOTACAO LIKE '%SUPERINTEND_NCIA%'
			OR NOME_LOTACAO LIKE '%DEP%'
			OR NOME_LOTACAO LIKE '%GER_NCIA%'
		) ORDER BY
			(CASE WHEN NOME_LOTACAO LIKE '%PRESID_N%' THEN 0 ELSE 4 END),
			(CASE WHEN NOME_LOTACAO LIKE '%PROCURADORIA%' THEN 1 ELSE 4 END),
			(CASE WHEN NOME_LOTACAO LIKE '%SUPERINTEND_NCIA%' THEN 2 ELSE 4 END),
			(CASE WHEN NOME_LOTACAO LIKE '%DEP%' THEN 3 ELSE 4 END),
			NOME_LOTACAO ASC
	";
	sc_select(datasetDepartamentos, $queryDepartamentos);
	if ( {datasetDepartamentos} === false  || empty({datasetDepartamentos}->fields['COD_LOTACAO']) ) {
		sc_alert("Não foi possível listar os departamentos", array('type' => 'warning'));
	} else {
		$departamentos = array();
		while ( !{datasetDepartamentos}->EOF ) {
			$departamentos[] = {datasetDepartamentos}->fields['COD_LOTACAO'];
			{datasetDepartamentos}->MoveNext();
		}
		{datasetDepartamentos}->Close();
	}

	$lotacaoPai = {FK_LOTACAO_SOLICITANTE};
	$count = 0;
	while (!in_array($lotacaoPai, $departamentos)) {
		$queryLotacaoPai = "
			SELECT
				COD_LOTACAO_PAI
			FROM
				RH_LOTACOES
			WHERE
				COD_LOTACAO = '$lotacaoPai'
		";
		sc_lookup_field(datasetLotacaoPai, $queryLotacaoPai);
		if ( {datasetLotacaoPai} === false  || empty({datasetLotacaoPai[0]['COD_LOTACAO_PAI']}) ) {
			sc_alert("Não foi possível consultar o departamento responsável por esta demanda.", array('type' => 'warning'));
		} else {
			$lotacaoPai = {datasetLotacaoPai[0]['COD_LOTACAO_PAI']};
		}

		if ($count > 10) { //segurança para não cair num looping infinito
			sc_alert("Não foi encontrado o departamento responsável por esta demanda.", array('type' => 'warning')); 
			break;
		}
		$count ++;
	}

	{FK_DEPARTAMENTO_RESPONSAVEL} = $lotacaoPai;


#COMO FICOU:
	$queryDepartamentoResp = " 
		SELECT
			COD_LOTACAO
		FROM
			RH_LOTACOES L
		WHERE
			(
				L.NOME_LOTACAO LIKE '%PRESID_N%'
			OR
				L.NOME_LOTACAO LIKE '%PROCURADORIA%'
			OR
				L.NOME_LOTACAO LIKE '%SUPERINTEND_NCIA%'
			OR
				L.NOME_LOTACAO LIKE '%DEP%'
			OR
				L.NOME_LOTACAO LIKE '%GER_NCIA%'
			)
		AND
			ROWNUM = 1
		START WITH
			L.COD_LOTACAO = '{FK_LOTACAO_SOLICITANTE}'
		CONNECT BY PRIOR
			L.COD_LOTACAO_PAI = L.COD_LOTACAO
	";
	sc_lookup_field(datasetDepartamentoResp, $queryDepartamentoResp);
	if ( {datasetDepartamentoResp} === false  || empty({datasetDepartamentoResp[0]['COD_LOTACAO']}) ) {
		sc_alert("Não foi possível consultar o departamento responsável por esta demanda.", array('type' => 'warning'));
	} else {
		{FK_DEPARTAMENTO_RESPONSAVEL} = {datasetDepartamentoResp[0]['COD_LOTACAO']};
	}
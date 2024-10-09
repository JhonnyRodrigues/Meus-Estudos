-- O objetivo dessa query era retornar o departamento ao qual a lotação pertencia
--Uma consulta hierárquica é usada quando se tem dados que possuem uma relação de ancestralidade, como uma estrutura de árvore (por exemplo, organograma de uma empresa).
SELECT
	COD_LOTACAO
FROM
	RH_LOTACOES L
WHERE
	L.COD_LOTACAO IN (
		SELECT
			L2.COD_LOTACAO AS COLUNA_DEPARTAMENTO
		FROM
			RH_LOTACOES L2
		WHERE
			(
				L2.NOME_LOTACAO LIKE '%PRESID_N%' -- id 1
				OR L2.NOME_LOTACAO LIKE '%PROCURADORIA%' -- 3
				OR L2.NOME_LOTACAO LIKE '%SUPERINTEND_NCIA%' -- 89, 90
				OR L2.NOME_LOTACAO LIKE '%DEP%' -- 5,21,36,43,52,66,77,78
				OR L2.NOME_LOTACAO LIKE '%GER_NCIA%' -- 79
			)
	)
	AND ROWNUM = 1 START WITH L.COD_LOTACAO = 9 -- 9 pertence ao 7, que pertence ao 5, que pertence ao 89, que pertence ao 1
	CONNECT BY PRIOR L.COD_LOTACAO_PAI = L.COD_LOTACAO
	
	
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
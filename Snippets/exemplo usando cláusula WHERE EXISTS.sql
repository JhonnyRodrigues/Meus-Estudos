--A IMPORTÂNCIA DA CLÁUSULA EXISTS
--A missão era adicionar mais um campo à consulta de equipamentos que retornava 346 registros, apenas para informar se o equipamento possui um contrato vigente

SELECT
    COD_EQUIPAMENTO_DTI,
    PATRIMONIO,
    COALESCE((
	    SELECT
			'SIM'
		FROM
			TI_REL_EQUIP_REL_TERMOS_USRS
		WHERE
			PRESCRITO = 'N'
			AND FK_EQUIPAMENTO = COD_EQUIPAMENTO_DTI
    ), 'NÃO') AS POSSUI_CONTRATO_VIGENTE
FROM
    TI_EQUIPAMENTOS_DTI
--Problema nº1: essa query retornava apenas 30 registros (em vez de 346 esperados) porque " Em SQL, quando uma subquery retorna NULL, a linha inteira da consulta principal será excluída do resultado."


SELECT
    COD_EQUIPAMENTO_DTI,
    PATRIMONIO,
    CASE
        WHEN sub.PRESCRITO IS NOT NULL THEN 'SIM'
        ELSE 'NÃO'
    END AS POSSUI_CONTRATO_VIGENTE
FROM
    TI_EQUIPAMENTOS_DTI
    LEFT JOIN (
        SELECT FK_EQUIPAMENTO, PRESCRITO FROM TI_REL_EQUIP_REL_TERMOS_USRS WHERE PRESCRITO = 'N'
    ) sub ON sub.FK_EQUIPAMENTO = TI_EQUIPAMENTOS_DTI.COD_EQUIPAMENTO_DTI
--Problema nº2: essa query retornava 354 registros (em vez de 346 esperados) porque "o LEFT JOIN pode introduzir duplicações quando há múltiplas correspondências na tabela TI_REL_EQUIP_REL_TERMOS_USRS


SELECT
    COD_EQUIPAMENTO_DTI,
    PATRIMONIO,
    CASE
        WHEN EXISTS (
            SELECT 1
            FROM TI_REL_EQUIP_REL_TERMOS_USRS
            WHERE PRESCRITO = 'N'
            AND FK_EQUIPAMENTO = TI_EQUIPAMENTOS_DTI.COD_EQUIPAMENTO_DTI
        ) THEN 'SIM'
        ELSE 'NÃO'
    END AS POSSUI_CONTRATO_VIGENTE
FROM
    TI_EQUIPAMENTOS_DTI
--Solução: Foi usada uma expressão CASE com EXISTS para verificar a existência de um contrato vigente (PRESCRITO = 'N'). A cláusula EXISTS garante que apenas uma verificação seja feita para cada COD_EQUIPAMENTO_DTI, evitando duplicações e mantendo o número de registros consistente. (346)
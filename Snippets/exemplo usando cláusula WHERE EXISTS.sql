--A IMPORT�NCIA DA CL�USULA EXISTS
--A miss�o era adicionar mais um campo � consulta de equipamentos que retornava 346 registros, apenas para informar se o equipamento possui um contrato vigente

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
    ), 'N�O') AS POSSUI_CONTRATO_VIGENTE
FROM
    TI_EQUIPAMENTOS_DTI
--Problema n�1: essa query retornava apenas 30 registros (em vez de 346 esperados) porque " Em SQL, quando uma subquery retorna NULL, a linha inteira da consulta principal ser� exclu�da do resultado."


SELECT
    COD_EQUIPAMENTO_DTI,
    PATRIMONIO,
    CASE
        WHEN sub.PRESCRITO IS NOT NULL THEN 'SIM'
        ELSE 'N�O'
    END AS POSSUI_CONTRATO_VIGENTE
FROM
    TI_EQUIPAMENTOS_DTI
    LEFT JOIN (
        SELECT FK_EQUIPAMENTO, PRESCRITO FROM TI_REL_EQUIP_REL_TERMOS_USRS WHERE PRESCRITO = 'N'
    ) sub ON sub.FK_EQUIPAMENTO = TI_EQUIPAMENTOS_DTI.COD_EQUIPAMENTO_DTI
--Problema n�2: essa query retornava 354 registros (em vez de 346 esperados) porque "o LEFT JOIN pode introduzir duplica��es quando h� m�ltiplas correspond�ncias na tabela TI_REL_EQUIP_REL_TERMOS_USRS


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
        ELSE 'N�O'
    END AS POSSUI_CONTRATO_VIGENTE
FROM
    TI_EQUIPAMENTOS_DTI
--Solu��o: Foi usada uma express�o CASE com EXISTS para verificar a exist�ncia de um contrato vigente (PRESCRITO = 'N'). A cl�usula EXISTS garante que apenas uma verifica��o seja feita para cada COD_EQUIPAMENTO_DTI, evitando duplica��es e mantendo o n�mero de registros consistente. (346)
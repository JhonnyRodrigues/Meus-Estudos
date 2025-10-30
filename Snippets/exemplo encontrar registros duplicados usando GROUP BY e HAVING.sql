-- lista os registros duplicados, porém com alto custo de processamento (nao recomendado)
SELECT
	*
FROM
	TABELA A
WHERE
	(
		SELECT
			COUNT(*)
		FROM
			TABELA A2
		WHERE
			A2.FK_CAMPO = A.FK_CAMPO
	) > 1
ORDER BY
	A.CAMPO1

--  lista os registros duplicados, com baixo custo de processamento (recomendado)
SELECT
	*
FROM
	HELP_HISTORICOS
WHERE
	FK_SOLICITACAO IN (
		SELECT
			FK_SOLICITACAO
		FROM
			HELP_HISTORICOS
		WHERE
			FK_STATUS = 4
		GROUP BY
			FK_SOLICITACAO
		HAVING
			COUNT(*) > 1
	)
	AND FK_STATUS = 4
ORDER BY
	FK_SOLICITACAO,
	ID_HISTORICO


-- agrupa os registros duplicados
SELECT
	FK_SOLICITACAO,
	COUNT(*)
FROM
	HELP_HISTORICOS
GROUP BY
	FK_SOLICITACAO
HAVING
	COUNT(*) > 1

-- 
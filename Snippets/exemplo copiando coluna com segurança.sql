UPDATE
	PAC_DEMANDA D
SET
	TEMP = (
			SELECT
				X.VALOR_TOTAL
			FROM
				PAC_DEMANDA X
			WHERE
				D.ID_DEMANDA = X.ID_DEMANDA
	)
WHERE EXISTS (
	SELECT 1 FROM PAC_DEMANDA X2
	WHERE D.ID_DEMANDA = X2.ID_DEMANDA
)

--O WHERE de fora (o 2º) existe para evitar que você atualize 
--registros na tabela u que não possuam correspondentes na tabela backup. 
--Sem esse where, registros sem correspondência teriam a coluna email setada pra NULL.
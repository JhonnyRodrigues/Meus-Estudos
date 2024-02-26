-- O objetivo dessa query era retornar o departamento ao qual a lotação pertencia
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
			OR
				L2.NOME_LOTACAO LIKE '%PROCURADORIA%' -- 3
			OR
				L2.NOME_LOTACAO LIKE '%SUPERINTEND_NCIA%' -- 89, 90
			OR
				L2.NOME_LOTACAO LIKE '%DEP%' -- 5,21,36,43,52,66,77,78
			OR
				L2.NOME_LOTACAO LIKE '%GER_NCIA%' -- 79
			)
	)
AND
	ROWNUM = 1
START WITH
	L.COD_LOTACAO = 9 -- 9 pertence ao 7, que pertence ao 5, que pertence ao 89, que pertence ao 1
CONNECT BY PRIOR
	L.COD_LOTACAO_PAI = L.COD_LOTACAO
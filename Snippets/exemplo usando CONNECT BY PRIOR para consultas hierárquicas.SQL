--Uma consulta HIERÁRQUICA é muito útil quando se tem dados que possuem uma relação de ancestralidade, como uma estrutura de árvore em uma hierarquia de funcionários de uma organização.


-- Hierarquia DESCENDENTE:
--O objetivo dessa query é retornar quais são os filhos/netos/bisnetos da LOTACAO_PAI
SELECT
    L.COD_LOTACAO
FROM
    RH_LOTACOES L
START WITH
    L.COD_LOTACAO_PAI = 149 --Diretoria Geral Administrativa e Financeira
CONNECT BY PRIOR
    L.COD_LOTACAO = L.COD_LOTACAO_PAI



-- Hierarquia ASCENDENTE:
--O objetivo dessa query é retornar à qual ramificação de alta gestão a lotação do usuário pertence
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
			( --ramificação de alta gestão:
				L2.NOME_LOTACAO LIKE '%PRESID_N%' -- id 1
				OR L2.NOME_LOTACAO LIKE '%PROCURADORIA%' -- 3
				OR L2.NOME_LOTACAO LIKE '%SUPERINTEND_NCIA%' -- 89, 90
				OR L2.NOME_LOTACAO LIKE '%DEP%' -- 5,21,36,43,52,66,77,78
				OR L2.NOME_LOTACAO LIKE '%GER_NCIA%' -- 79
			)
	)
	AND ROWNUM = 1
START WITH
	L.COD_LOTACAO = 9
-- 9(setor) pertence ao 7(divisao), que pertence ao 5(departamento), que pertence ao 89(superintendencia), que pertence ao 1(presidencia)
CONNECT BY PRIOR
	L.COD_LOTACAO_PAI = L.COD_LOTACAO /* NOTE A INVERSAO ENTRE A LOTAÇÃO PAI E FILHO! */



-- Limitar por níveis (cláusula LEVEL)
-- O objetivo dessa query é retornar apenas o primeiro nível abaixo da presidência, ou seja, as diretorias + Procuradoria jurídica (exceto assessoria)
SELECT
	COD_LOTACAO
FROM
	RH_LOTACOES L
WHERE
	LEVEL = 2
	AND L.NOME_LOTACAO NOT LIKE UPPER('ASSESSORIA%')
	AND ATIVO = 1
START WITH
	L.COD_LOTACAO = 1--$LOTACAO_PRESIDENCIA
CONNECT BY PRIOR
	L.COD_LOTACAO = L.COD_LOTACAO_PAI
--Uma consulta hierárquica é usada quando se tem dados que possuem uma relação de ancestralidade, como uma estrutura de árvore (por exemplo, organograma de uma empresa).

-- Hierarquia ASCENDENTE:
--O objetivo dessa query é retornar qual ramificação de alta gestao a lotação do usuário pertence
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
			( --ramificação de alta gestao:
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
	L.COD_LOTACAO_PAI = L.COD_LOTACAO



-- Hierarquia DESCENDENTE:
--O objetivo dessa query é retornar quais são os filhos/netos/bisnetos.. da LOTACAO_PAI
SELECT
    L.COD_LOTACAO
FROM
    RH_LOTACOES L
START WITH
    L.COD_LOTACAO_PAI = 149 --Diretoria Geral Administrativa e Financeira
CONNECT BY PRIOR
    L.COD_LOTACAO = L.COD_LOTACAO_PAI /*note a inversao*/
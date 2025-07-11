/* 
 Usando CTE + RECURSAO, a consulta abaixo retorna as lotacoes hierarquicamente abaixo da lotacao do usuario, assim as chefias só veem as demandas de seu setor/divisao/dpto

 CTE - Common Table Expression é uma tabela temporária para ser usada em outra consulta, em tempo de execução. Muito utilizada em consultas recursivas
 */
 
WITH subordinadas (
    COD_LOTACAO,
    COD_LOTACAO_PAI
) AS (
    SELECT
        COD_LOTACAO,
        COD_LOTACAO_PAI
    FROM
        RH_LOTACOES
    WHERE
        COD_LOTACAO = (
            SELECT
                COD_LOTACAO
            FROM
                RH_FUNCIONARIOS_LOTACOES
            WHERE
                COD_FUNCIONARIO = '$usuarioLogado'
            	AND DT_FIM_LOTACAO IS NULL
        )
    UNION ALL
    SELECT
        L.COD_LOTACAO,
        L.COD_LOTACAO_PAI
    FROM
        RH_LOTACOES L 
        JOIN subordinadas ON L.COD_LOTACAO_PAI = subordinadas.COD_LOTACAO
)
SELECT
    LISTAGG(COD_LOTACAO, ',') WITHIN GROUP (ORDER BY COD_LOTACAO_PAI) AS COD_LOTACAO
FROM
    subordinadas
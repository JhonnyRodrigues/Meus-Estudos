/*
 Uma consulta hier�rquica � muito �til para recuperar dados de uma estrutura de �rvore, como a hierarquia de funcion�rios em uma organiza��o.

 CTE - Common Table Expression � uma tabela tempor�ria para ser usada em outra consulta, em tempo de execu��o. Muito utilizada em consultas recursivas

 A consulta abaixo retorna as lotacoes hierarquicamente abaixo da lotacao do usuario, assim as chefias s� veem as demandas de seu setor/divisao/dpto
 */
 
WITH subordinadas (
    COD_LOTACAO,
    NOME_LOTACAO,
    COD_LOTACAO_PAI
) AS (
    SELECT
        COD_LOTACAO,
        NOME_LOTACAO,
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
            AND
                DT_FIM_LOTACAO IS NULL
        )
    UNION ALL
    SELECT
        L.COD_LOTACAO,
        L.NOME_LOTACAO,
        L.COD_LOTACAO_PAI
    FROM
        RH_LOTACOES L JOIN subordinadas ON L.COD_LOTACAO_PAI = subordinadas.COD_LOTACAO
)
SELECT
    LISTAGG(COD_LOTACAO, ',') WITHIN GROUP (ORDER BY COD_LOTACAO_PAI) AS COD_LOTACAO
FROM
    subordinadas
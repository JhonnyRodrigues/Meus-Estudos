--CTE - Common Table Expression é uma tabela temporária para ser usada em outra consulta, em tempo de execução.


-- O objetivo dessa query é verificar se, para cada lotação consolidadora, o último procedimento realizado no ano atual foi Consolidação.
    
WITH lotacoes_consolidadoras AS (
    SELECT
        COD_LOTACAO
    FROM
        RH_LOTACOES
    WHERE
        LEVEL IN (1, 2)
        AND NOME_LOTACAO NOT LIKE UPPER('ASSESSORIA%')
        AND ATIVO = 1
    START WITH
        COD_LOTACAO = 1
    CONNECT BY PRIOR
        COD_LOTACAO = COD_LOTACAO_PAI
),
ultimos_procedimentos AS (
    SELECT
        H.FK_LOTACAO,
        H.FK_PROCEDIMENTO,
        ROW_NUMBER() OVER (
            PARTITION BY H.FK_LOTACAO
            ORDER BY H.ID_HISTORICO DESC
        ) AS ORDEM
    FROM
        PAC_HISTORICOS H
    WHERE
        EXTRACT(YEAR FROM H.DATA_INSERCAO) = EXTRACT(YEAR FROM SYSDATE)
        AND H.FK_LOTACAO IN (SELECT COD_LOTACAO FROM lotacoes_consolidadoras)
)
SELECT
    FK_LOTACAO,
    FK_PROCEDIMENTO
FROM
    ultimos_procedimentos
WHERE
    ORDEM = 1
    AND FK_PROCEDIMENTO <> 1
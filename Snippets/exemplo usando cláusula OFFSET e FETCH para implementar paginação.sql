-- CLAUSULAS FETCH NEXT, FIRST, OFFSET PARA IMPLEMENTAR PAGINAÇÃO
SELECT
    *
FROM
    RH_FUNCIONARIOS
ORDER BY
    COD_FUNCIONARIO 
OFFSET 5 ROWS -- Pula as primeiras 5 linhas do resultado.
FETCH NEXT 5 ROWS ONLY --traz as 5 próximas linhas após o offset


-- Pegar a primeira página (10 registros)
SELECT *
FROM clientes
ORDER BY id_cliente
FETCH FIRST 10 ROWS ONLY;
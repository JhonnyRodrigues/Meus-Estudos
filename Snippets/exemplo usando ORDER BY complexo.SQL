-- Ordena, respectivamente, pelas situa��es:-  aguardando solicitante(11)- abertas(1)- demais (em tr�mite interno DTI)- conclu�das(4)- encerradas(10)- canceladas(11). Ent�o, finalmente, ordena pelas mais recentes no topo.
ORDER BY
    (
        CASE FK_STATUS
            WHEN 11 THEN 1
            WHEN 1 THEN 2
            WHEN 4 THEN 4
            WHEN 10 THEN 5
            WHEN 9 THEN 6
            ELSE 3
        END
    ),
    H.ID_HISTORICO DESC
SELECT
        *
FROM
        (
                SELECT
                        AE.ID_ANALISE_EQUIPAMENTO,
                        AE.DESCRICAO
                FROM
                        SGI.CQA_GRUPO_ANALISES GA
                        INNER JOIN SGI.CQA_TIPO_ANALISE TP ON GA.ID_GRUPO = TP.FK_GRUPO
                        INNER JOIN SGI.CQA_ANALISE_EQUIPAMENTO AE ON TP.ID_TIPO_ANALISE = AE.FK_TIPO_ANALISE
                        INNER JOIN SGI.CQA_RESULTADO RE ON AE.ID_ANALISE_EQUIPAMENTO = RE.FK_ANA_EQUIP
                WHERE
                        AE.ATIVO = 1
                        AND TP.FK_GRUPO = 2
                        AND TP.ANALISE_RAPIDA = 1
                        AND 2 = 1
                GROUP BY
                        AE.ID_ANALISE_EQUIPAMENTO,
                        AE.DESCRICAO
                ORDER BY
                        AE.DESCRICAO
                UNION
                ALL
                SELECT
                        AE.ID_ANALISE_EQUIPAMENTO,
                        AE.DESCRICAO
                FROM
                        SGI.CQA_GRUPO_ANALISES GA
                        INNER JOIN SGI.CQA_TIPO_ANALISE TP ON GA.ID_GRUPO = TP.FK_GRUPO
                        INNER JOIN SGI.CQA_ANALISE_EQUIPAMENTO AE ON TP.ID_TIPO_ANALISE = AE.FK_TIPO_ANALISE
                        INNER JOIN SGI.CQA_RESULTADO RE ON AE.ID_ANALISE_EQUIPAMENTO = RE.FK_ANA_EQUIP
                WHERE
                        AE.ATIVO = 1
                        AND TP.FK_GRUPO = 2
                        AND 2 <> 1
                GROUP BY
                        AE.ID_ANALISE_EQUIPAMENTO,
                        AE.DESCRICAO
                ORDER BY
                        AE.DESCRICAO
        )
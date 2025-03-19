-- exemplo de como inserir dinamicamente uma classe em campo da grid, no Scriptcase
-- Obs.: aplicar na consulta principal da aplicação

SELECT
    TEU.COD_FUNCIONARIO AS COD_FUNCIONARIO,
    TEU.ID_PROGRAMA AS ID_PROGRAMA,
    TEU.ID_PROGRAMA_USUARIO AS ID_PROGRAMA_USUARIO,
    CASE
        WHEN TEU.ATIVO = 1 THEN '<span class="badge-pill badge-success">Ativo</span>'
        WHEN TEU.ATIVO = 2 THEN '<span class="badge-pill badge-danger">Inativo</span>'
        ELSE '<span class="badge-pill badge-secondary"> - </span>'
    END AS ATIVO,
    CASE
        WHEN RF.ATIVO = 1 THEN '<span class="badge-pill badge-success">Ativo</span>'
        WHEN RF.ATIVO = 0 THEN '<span class="badge-pill badge-danger">Inativo</span>'
        ELSE '<span class="badge-pill badge-secondary"> - </span>'
    END AS FUNC_ATIVO
FROM
    SGI.TI_EQUIPAMENTOS_USUARIO TEU
LEFT JOIN
    RH_FUNCIONARIOS RF ON TEU.COD_FUNCIONARIO = RF.COD_FUNCIONARIO
--A consulta retorna vários registros, preciso que o retorno dessa consulta seja usado como parametro para multiplas inserções
INSERT INTO	
	HELP_RELACAO_LOCAIS_FUNC_AUT (ID_RELACAO_LOCAIS_FUNC_AUT,FK_FUNCIONARIO,FK_LOCAL)
SELECT
	(SELECT MAX(ID_RELACAO_LOCAIS_FUNC_AUT) + 1	FROM HELP_RELACAO_LOCAIS_FUNC_AUT ) + ROWNUM,
	COD_FUNCIONARIO,
	8
FROM
	RH_FUNCIONARIOS
WHERE
	ATIVO = 1;





-- Exemplo usando consulta hierarquica: no organograma, somente ramificação administrativa pode agendar a sala CTI
INSERT INTO	
	HELP_RELACAO_LOCAIS_FUNC_AUT (ID_RELACAO_LOCAIS_FUNC_AUT,FK_FUNCIONARIO,FK_LOCAL) 
SELECT
	(SELECT MAX(ID_RELACAO_LOCAIS_FUNC_AUT) + 1 FROM HELP_RELACAO_LOCAIS_FUNC_AUT ) + ROWNUM AS ID,
	F.COD_FUNCIONARIO,
	8
FROM
	RH_FUNCIONARIOS F
	JOIN RH_FUNCIONARIOS_LOTACOES L ON L.COD_FUNCIONARIO = F.COD_FUNCIONARIO 
WHERE
	F.ATIVO = 1
	AND L.DT_FIM_LOTACAO IS NULL
	AND (
		L.COD_LOTACAO = 149 -- Inclui os integrantes da DIRETORIA GERAL ADMINISTRATIVO E FINANCEIRO
		OR L.COD_LOTACAO IN (
			SELECT
				L.COD_LOTACAO
			FROM
				RH_LOTACOES L
			START WITH
				L.COD_LOTACAO_PAI = 149
			CONNECT BY PRIOR
				L.COD_LOTACAO = L.COD_LOTACAO_PAI
		)
	);
    
SELECT * FROM HELP_RELACAO_LOCAIS_FUNC_AUT;
DELETE FROM HELP_RELACAO_LOCAIS_FUNC_AUT WHERE FK_LOCAL = 8;
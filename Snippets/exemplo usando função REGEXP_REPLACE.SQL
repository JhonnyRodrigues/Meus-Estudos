--##############################################################################################################
--######################### EXEMPLO USANDO REGEX PARA ALTERAR STRING NO BANCO DE DADOS #########################
--##############################################################################################################
SELECT
	ID_AGENDAMENTO,
	SOLICITACAO,
	REGEXP_REPLACE(SOLICITACAO, 'size=''1px''|size=''1''|size="1px"|size="1"', 'id-sala=''' || FK_LOCAL || '''') AS NOVA_DESCRICAO,
	FK_LOCAL
FROM
	HELP_DESK_AGENDAMENTO
WHERE
	SOLICITACAO LIKE ('% size=''1px''%')
OR
	SOLICITACAO LIKE ('% size=''1''%')

	
	
UPDATE HELP_DESK_AGENDAMENTO SET SOLICITACAO = REGEXP_REPLACE(SOLICITACAO, 'size=''1px''|size=''1''|size="1px"|size="1"', 'id-sala=''' || FK_LOCAL || '''')
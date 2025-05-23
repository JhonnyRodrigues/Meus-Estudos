--O Oracle 11G+ possuem as seguintes fun��es: 
--REGEXP_LIKE() faz busca em uma regEx
--REGEXP_REPLACE() procura um padr�o e substitui por uma dada string
--REGEXP_SUBSTR() caso precise do conte�do de uma string, mas n�o corresponder a sua posi��o na string original
--REGEXP_COUNT() obt�m a quantidade de vezes que uma express�o regular ocorre em uma string.

--##############################################################################################################
--#################### EXEMPLO USANDO REGEXP_LIKE PARA ENCONTRAR NOMES QUE INICIAM COM 'J' #####################
--##############################################################################################################
SELECT
	*
FROM
	RH_FUNCIONARIOS
WHERE
	REGEXP_LIKE(NOME_FUNCIONARIO, '^J', 'c') --CASE SENSITIVE

--##############################################################################################################
--#################### EXEMPLO USANDO REGEXP_LIKE PARA ENCONTRAR O RESPONS�VEL FINANCEIRO  #####################
--##############################################################################################################
SELECT
	COD_FUNCIONARIO
FROM
	RH_FUNCIONARIOS
WHERE --DIRETOR DO DEPARTAMENTO DE FINANCAS
	REGEXP_LIKE(CARGO_EXERCICIO , '(DIRETOR)(.*)(FINAN)(.*)', 'i') --CASE INSENSITIVE


--##############################################################################################################
--#################### EXEMPLO USANDO REGEXP_REPLACE PARA ALTERAR STRING NO BANCO DE DADOS #####################
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
-- Por default existe um Order By no retorno dessa consulta que pode atrapalhar a indexação do resultado
SELECT --92 registros
	COUNT(FK_SOLICITACAO) AS ABERTAS_SEMANA
FROM
	HELP_HISTORICOS
WHERE
	FK_STATUS = 1
AND
	DATA_INSERCAO < SYSDATE - 7
UNION
SELECT --24
	COUNT(FK_SOLICITACAO) AS ENCERRADAS_SEMANA
FROM
	HELP_HISTORICOS
WHERE
	FK_STATUS = 10
AND
	DATA_INSERCAO < SYSDATE - 7
UNION
SELECT --116
	COUNT(FK_SOLICITACAO) AS TOTAL_ABERTAS
FROM
	HELP_HISTORICOS
WHERE
	FK_STATUS = 1
UNION
SELECT --183
	COUNT(ID_SOLICITACAO) AS TOTAL_SOLICITACOES
FROM
	HELP_SOLICITACOES
-- retorno da consulta:
--//////////////////////
--/// ABERTAS_SEMANA ///
--//////////////////////
--///             24 ///
--///             92 ///
--///            116 ///
--///            183 ///
--//////////////////////


-- Usando a tabela virtual (DUAL) é possível tornar a consulta horizontal, permitindo indexar o valor do campo pelo seu nome de coluna
SELECT 
	(
		SELECT --92
			COUNT(FK_SOLICITACAO) AS ABERTAS_SEMANA
		FROM
			HELP_HISTORICOS
		WHERE
			FK_STATUS = 1
		AND
			DATA_INSERCAO < SYSDATE - 7
	) AS ABERTAS_SEMANA,
	(
		SELECT --24
			COUNT(FK_SOLICITACAO) AS ENCERRADAS_SEMANA
		FROM
			HELP_HISTORICOS
		WHERE
			FK_STATUS = 10
		AND
			DATA_INSERCAO < SYSDATE - 7
	)  AS ENCERRADAS_SEMANA,
	(
		SELECT --116
			COUNT(FK_SOLICITACAO) AS TOTAL_ABERTAS
		FROM
			HELP_HISTORICOS
		WHERE
			FK_STATUS = 1
	) AS TOTAL_ABERTAS,
	(
		SELECT --183
			COUNT(ID_SOLICITACAO) AS TOTAL_SOLICITACOES
		FROM
			HELP_SOLICITACOES
	) AS TOTAL_SOLICITACOES
FROM DUAL;
-- retorno da consulta:
--/////////////////////////////////////////////////////////////////////////////////////
--/// ABERTAS_SEMANA /// ENCERRADAS_SEMANA /// TOTAL_ABERTAS /// TOTAL_SOLICITACOES ///
--/////////////////////////////////////////////////////////////////////////////////////
--///             92 ///                24 ///           116 ///                183 ///
--/////////////////////////////////////////////////////////////////////////////////////


-- Retorno interessante também pode ser obtido combinando as cláusulas ORDER BY + CASE
SELECT * FROM (
SELECT --92
	'ABERTAS_SEMANA' AS TIPO,
	COUNT(FK_SOLICITACAO) AS TOTAL
FROM
	HELP_HISTORICOS
WHERE
	FK_STATUS = 1
AND
	DATA_INSERCAO < SYSDATE - 7
UNION
SELECT --24
	'ENCERRADAS_SEMANA' AS TIPO,
	COUNT(FK_SOLICITACAO) AS TOTAL
FROM
	HELP_HISTORICOS
WHERE
	FK_STATUS = 10
AND
	DATA_INSERCAO < SYSDATE - 7
UNION
SELECT --116
	'TOTAL_ABERTAS' AS TIPO,
	COUNT(FK_SOLICITACAO) AS TOTAL
FROM
	HELP_HISTORICOS
WHERE
	FK_STATUS = 1
UNION
SELECT --183
	'TOTAL_SOLICITACOES' AS TIPO,
	COUNT(ID_SOLICITACAO) AS TOTAL
FROM
	HELP_SOLICITACOES
) ORDER BY CASE TIPO
			WHEN 'ABERTAS_SEMANA' THEN 1
			WHEN 'ENCERRADAS_SEMANA' THEN 2
			WHEN 'TOTAL_ABERTAS' THEN 3
			ELSE 4
		END
-- retorno da consulta:
--//////////////////////////////////////////////////
--///        TIPO        ///        TOTAL        ///
--//////////////////////////////////////////////////
--/// ABERTAS_SEMANA     ///                  92 ///
--/// ENCERRADAS_SEMANA  ///                  24 ///
--/// TOTAL_ABERTAS      ///                 116 ///
--/// TOTAL_SOLICITACOES ///                 183 ///
--//////////////////////////////////////////////////
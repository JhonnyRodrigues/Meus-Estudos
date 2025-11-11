--A funcao LISTAGG() concatena os valores de uma coluna em uma única string.
SELECT
    LISTAGG(FK_RESPONSAVEL, ',') WITHIN GROUP (ORDER BY FK_RESPONSAVEL) AS RESPONSAVEIS
FROM
    PAC_RESPONSAVEIS


-- Exemplo Completo
SELECT
	LISTAGG(
		A.FK_DEMANDA || 
		CASE 
			WHEN A.FK_NIVEL = 1 THEN 'A'
			WHEN A.FK_NIVEL = 2 THEN 'C'
			ELSE ''
		END,
		', '
	) WITHIN GROUP (ORDER BY A.FK_DEMANDA ASC) AS DEMANDAS_CONCATENADAS
											FROM
	PAC_ASSINATURAS A
	JOIN PAC_DEMANDA D ON D.ID_DEMANDA = A.FK_DEMANDA
WHERE
	A.FK_SITUACAO = '1'
	AND D.FK_LOTACAO_CONSOLIDADORA = 149 -- '$lotacao'
/* Resultado esperado em aplicação:
Alerta #58: Procedimento Bloqueado!
Não é possível consolidar pois as seguintes demandas ainda aguardam avaliação:
415A, 415C
Legenda:
A - nível Avaliador, C nível Consolidador
*/
SELECT
	*
FROM
	PAC_ASSINATURAS A
WHERE
	(
		SELECT
			COUNT(A2.ID_ASSINATURA)
		FROM
			PAC_ASSINATURAS A2
		WHERE
			A2.FK_DEMANDA = A.FK_DEMANDA
	) > 1
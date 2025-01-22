<?php

$conn = oci_connect(
	'usuario', 
	'senh@', 
	'(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=semae.com)(PORT=1521))(CONNECT_DATA=(SERVICE_NAME=bancoDados)))',
	'charset'
);
if (!$conn) {
    $e = oci_error();
    die("Erro ao conectar ao banco: " . $e['message']);
}

$token = '4310B';

try {
    // oci_trans_start($conn);
	$queryIsFormActive = "
		SELECT
			TOKEN_ADMISSAO,
			LINK_ATIVO
		FROM
			SGI.MED_ENCAMINHAMENTO
		WHERE
			UPPER(TOKEN_ADMISSAO) = UPPER(:TOKEN)
	";
    $stmtInsert = oci_parse($conn, $queryIsFormActive);
    oci_bind_by_name($stmtInsert, ':TOKEN', $token);
    if (!oci_execute($stmtInsert, OCI_NO_AUTO_COMMIT)) {
        throw new Exception(oci_error($stmtInsert)['message']);
    }
    $updateQuery = "
        UPDATE SGI.MED_ENCAMINHAMENTO 
        SET LINK_ATIVO = 'N' 
        WHERE UPPER(TOKEN_ADMISSAO) = :TOKEN
    ";
    $stmtUpdate = oci_parse($conn, $updateQuery);
    oci_bind_by_name($stmtUpdate, ':TOKEN', $token);
    if (!oci_execute($stmtUpdate, OCI_NO_AUTO_COMMIT)) {
        throw new Exception(oci_error($stmtUpdate)['message']);
    }
    oci_commit($conn);
    echo "Operações realizadas com sucesso!";
} catch (Exception $e) {
    // oci_rollback($conn);
    echo "Erro ao processar as operações: " . $e->getMessage();
} finally {
    oci_free_statement($stmtInsert);
    oci_close($conn);
}
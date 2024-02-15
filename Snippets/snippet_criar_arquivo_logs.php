<?php

#ARQUIVO LOGS
// unlink("../logs/lembretes_solicitacoes.txt");
if (!is_dir('../logs')) {
    mkdir('../logs', 0755);
}
$file = fopen("../logs/lembretes_solicitacoes.txt", "a+");
if (!$file) {
    exit("Falha ao abrir o arquivo");
}
if (filesize("../logs/lembretes_solicitacoes.txt") == 0) {
    fwrite($file, "DATA e HORA --- USUÁRIO LOGADO --- E-MAIL DO DESTINATÁRIO");
}
fwrite($file, "\n" . date('d/m/Y H:i:s') . ' - ' . $_SESSION['usr_login'] . ' - ' . {datasetSolicitAguardando}->fields['EMAIL']);
fclose($file);

?>
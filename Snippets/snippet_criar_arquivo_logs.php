<?php

#ARQUIVO LOGS
// unlink("../logs/lembretes_solicitacoes.txt");exit;
if (!is_dir('../logs')) {
    if (!mkdir('../logs', 0755)) {
        errorMessage("Falha ao criar o diretório que armazena os logs de envio de e-mails lembretes aos solicitantes.", 5);
    } else {
        // echo 'Diretório criado com sucesso!';
        $file = fopen("../logs/lembretes_solicitacoes.txt", "a+"); //modo de criacao
        if (!$file) {
            errorMessage("Falha ao abrir o arquivo que armazena os logs de envio de e-mails lembretes aos solicitantes.", 6);
        } else if (filesize("../logs/lembretes_solicitacoes.txt") == 0) {
            fwrite($file, "DATA e HORA --- USUÁRIO LOGADO --- E-MAIL DO DESTINATÁRIO"); //cabecalho
        }
    }
} else {
    // echo 'O diretório já existe.';
    $file = fopen("../logs/lembretes_solicitacoes.txt", "a+"); //modo de criacao
    if (!$file) {
        errorMessage("Falha ao abrir o arquivo que armazena os logs de envio de e-mails lembretes aos solicitantes.", 6);
    } else if (filesize("../logs/lembretes_solicitacoes.txt") == 0) {
        fwrite($file, "DATA e HORA --- USUÁRIO LOGADO --- E-MAIL DO DESTINATÁRIO"); //cabecalho
    }
}
fwrite($file, "\n" . date('d/m/Y H:i:s') . ' - ' . $_SESSION['usr_login'] . ' - ' . {datasetSolicitAguardando}->fields['EMAIL']);
fclose($file);

?>
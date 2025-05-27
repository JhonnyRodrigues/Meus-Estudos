<?php

#ARQUIVO LOGS
// unlink("../logs/lembretes_solicitacoes.txt");exit;
if (!is_dir('../logs')) {
    if (!mkdir('../logs', 0755)) {
        warningMessage("Falha ao criar o diretório que armazena os logs de envio de e-mails lembretes aos solicitantes.", 5);
        return [];
    } else {
        // echo 'Diretório criado com sucesso!';
        $file = fopen("../logs/lembretes_solicitacoes.txt", "a+"); //modo de criacao
        if (!$file) {
            warningMessage("Falha ao criar o arquivo para armazenar os logs de envio de e-mails lembretes aos solicitantes.", 6);
            return [];
        } else if (filesize("../logs/lembretes_solicitacoes.txt") == 0) {
            fwrite($file, "DATA e HORA --- USUÁRIO LOGADO --- E-MAIL DO DESTINATÁRIO"); //cabecalho
        }
    }
} else {
    // echo 'O diretório já existe.';
    $file = fopen("../logs/lembretes_solicitacoes.txt", "a+"); //modo de criacao
    if (!$file) {
        warningMessage("Falha ao abrir o arquivo que armazena os logs de envio de e-mails lembretes aos solicitantes.", 7);
        return [];
    } else if (filesize("../logs/lembretes_solicitacoes.txt") == 0) {
        fwrite($file, "DATA e HORA --- USUÁRIO LOGADO --- E-MAIL DO DESTINATÁRIO"); //cabecalho
    }
}


#ARQUIVO LOGS
fwrite($file, "\n" . date('d/m/Y H:i:s') . " - $usuarioLogado - " . {datasetSolicitAguardando}->fields['EMAIL']);

#ARQUIVO LOGS
fclose($file);
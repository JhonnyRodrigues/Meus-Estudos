<?php

$stmtInsertUsuario = "
    INSERT INTO HELP_USUARIOS (
        FK_SOLICITACAO ,
        FK_FUNCIONARIO ,
        NOME_FUNCIONARIO ,
        MATRICULA ,
        FK_CARGO ,
        FK_REPARTICAO ,
        CPF ,
        RG ,
        HORA_INICIO_JORNADA ,
        HORA_FIM_JORNADA ,
        DATA_INSERCAO ,
        OBSERVACAO
    ) VALUES (
        :idSolicitacao,
        '{COD_FUNCIONARIO}',
        '{NOME_CIVIL}',
        '{MATRICULA_FUNCIONAL}',
        '{FK_ID_CARGO_EXERCICIO}',
        :reparticaoUsuario,
        '{CPF}',
        '{RG}',
        TO_DATE(:entrada, 'HH24:MI'),
        TO_DATE(:saida, 'HH24:MI'),
        SYSDATE,
        '$mensagemUsuario'
    ) RETURNING ID_USUARIO INTO :idUsuario
";
$idUsuario = str_repeat(" ", 50); // buffer da variável é aumentado antes de passar para o bind, a fim de evitar o erro de truncamento.
/*	O truncamento acontece quando um valor, armazenado ou processado, é cortado porque o espaço reservado para ele é menor que o necessário.
Se o tamanho da variável for menor do que o valor retornado, o dado pode ser truncado ou gerar um erro como: ORA-06502: PL/SQL: numeric or value error: character string buffer too small*/
$params = [
    'idUsuario'			=> &$idUsuario, // Passagem por referência
    'idSolicitacao'		=> $idSolicitacao,
    'reparticaoUsuario'	=> $reparticaoUsuario,
    'entrada'			=> $jornada['entrada'],
    'saida'				=> $jornada['saida'],
];
$resultInsertUsuario = $this->Db->Execute($stmtInsertUsuario, $params);
if ($resultInsertUsuario === false || trim($idUsuario) === "") {
    if ($this->Ini->sc_tem_trans_banco) {
        $this->Db->RollbackTrans();
        $this->Ini->sc_tem_trans_banco = false;
    }
    sc_error_message("Não foi possível inserir o registro de novo usuário.");
    sc_error_exit();
} else {
    $idUsuario = (int) trim($idUsuario); // Retorna como número inteiro, removendo espaços extras
}

...
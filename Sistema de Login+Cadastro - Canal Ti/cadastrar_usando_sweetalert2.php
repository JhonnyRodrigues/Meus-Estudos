<?php
## ESSE ARQUIVO É UMA ALTERNATIVA AO ARQUIVO 'CADASTRAR.PHP'

include_once './conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); //sanitiza os valores

if (empty($dados['nome'])) { /** atributo encontrado no input do form cadastro.php */
    $retorno = ['status' => false, 'msg' => "É necessário preencher o campo nome!"];
} elseif (empty($dados['usuario'])) {
    $retorno = ['status' => false, 'msg' => "É necessário preencher o campo usuário!"];
} elseif (empty($dados['senha'])) {
    $retorno = ['status' => false, 'msg' => "É necessário preencher o campo senha!"];
} elseif (isset($conexao)) {
    $stmtInsert = "
        INSERT INTO TABELA_USUARIOS (
            NOME_USER,
            LOGIN_USER,
            SENHA_USER
        ) VALUES (
            :nome_usuario,
            :login_usuario,
            :senha_usuario
        )
    ";
    ## PDO
    $cad_usuario = $conexao->prepare($stmtInsert);
    $cad_usuario->bindParam(':nome_usuario', $dados['nome']);
    $cad_usuario->bindParam(':login_usuario', $dados['usuario']);
    $cad_usuario->bindParam(':senha_usuario', $dados['senha']);
    $cad_usuario->execute();
    if ($cad_usuario->rowCount()) {
        $retorno = ['status' => true, 'msg' => "O usuário foi cadastrado."];
    } else {
        $retorno = ['status' => false, 'msg' => "O usuário <ins>não</ins> foi cadastrado!"];
    }
    /*
    ## MYSQLI
    $cad_usuario = $conexao->prepare($stmtInsert);
    $cad_usuario->bind_param(':nome_usuario', $dados['nome']);
    $cad_usuario->bind_param(':login_usuario', $dados['usuario']);
    $cad_usuario->bind_param(':senha_usuario', $dados['senha']);
    $cad_usuario->execute();
    if ($cad_usuario->num_rows) {
        $retorno = ['status' => true, 'msg' => "O usuário foi cadastrado."];
    } else {
        $retorno = ['status' => false, 'msg' => "O usuário <ins>não</ins> foi cadastrado!"];
    }
    */
}

echo json_encode($retorno);

?>
<?php
session_start();
include('conexao.php');

//pegar todos os campos do formulário usando a função de segurança contra SQLInjection
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);  
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']); //lembrar que são passados 2 parâmetros
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//fazer a validação se o usuário existe ou não no BD
$sql = "select count(*) as total from usuario where USUARIO = '$usuario'"; //declara uma variável que armazena uma query
$resultado = mysqli_query($conexao, $sql); //executa essa query que retorna 1 quando o usuário existir ou 0 quando não existir esse registro no Banco
$linha = mysqli_fetch_assoc($resultado); //declara uma variável que recebe o resultado da query

if ($linha['total'] == 1) {
    
}



?>
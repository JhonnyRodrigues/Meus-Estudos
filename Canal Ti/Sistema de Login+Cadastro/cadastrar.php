<?php
session_start();
include('conexao.php');

//pegar todos os campos do formulário usando a função de segurança contra SQLInjection
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));//lembrar que são passados 2 parâmetros
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario'])); //a função trim() tira os espaços
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '${usuario}'"; //declara uma variável que armazena uma query que faz a validação se o usuário existe ou não no BD
$resultado = mysqli_query($conexao, $sql); //executa essa query que retorna 1 quando o usuário existir ou 0 quando não existir esse registro no Banco
$linha = mysqli_fetch_assoc($resultado); //declara uma variável que recebe o resultado da query (1 ou 0)

if ($linha['total'] == 1) { //se o usuário existir, então...
    $_SESSION['usuario_existe'] = true; //cria sessão 'usuario_existe'
    header('location: cadastro.php');   //redireciona pro formulário
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())"; //a variável recebe uma query de insert

if ($conexao->query($sql) === true) { //valida se a query foi executada com sucesso
    $_SESSION['status_cadastro'] = true; //cria a sessão para indicar que o cadastro teve êxito
}
//*Explicando: Enquanto que, no Java, o padrão para referenciar atributos e métodos é o ponto (this.),	no PHP não é ponto e sim uma flecha ->. Exemplo: $p1→pagarMensalidade();    Na condicional acima, o objeto $conexao tem como um de seus métodos a função query() que, por sua vez, tem o papel de executar um query e retornar true o false (0 ou 1)

$conexao->close(); //encerra a conexão

header('Location: cadastro.php'); //redireciona
exit;
?>
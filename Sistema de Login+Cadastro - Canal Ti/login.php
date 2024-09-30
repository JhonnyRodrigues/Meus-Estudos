<!--esse arquivo realizará as VALIDAÇÕES-->
<?php
session_start(); //sempre que trabalharmos com $_SESSION, é necessário utilizar essa função na 1ª linha para que o PHP entenda que queremos trabalhar com sessões
include('conexao.php'); //importa a instância da conexão, com suas constantes, assim como a variável `$conexão`

if (empty($_POST['usuario']) || empty($_POST['senha'])) { //verifica se foi digitado algo no formulário
    header('Location: index.php'); //se algum dos campos for vazio, redireciona novamente ao início
    exit(); //fecha a parte dos cabeçalhos
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']); //essa função protege contra ataques de SQL_Injection
$senha = mysqli_real_escape_string($conexao, $_POST['senha']); //nela são passados 2 parâmetros: a instância da conexão e o campo de login digitado pelo usuário (que é o parâmetro `name` do formulário)

$query = "select nome from usuario where USUARIO = '{$usuario}' and SENHA = md5('{$senha}')"; //cria uma variável que armazena uma query que verifica no banco MySQL se o usuario e senha digitados são válidos, ou seja, se são os mesmos armazenados no Banco de Dados. PS: troquei o campo `usuario` pelo campo `nome`

$resultado = mysqli_query($conexao, $query); //função para executar a query montada

$linha = mysqli_num_rows($resultado); //se for inseridos usuario ou senha incorretos, essa função retorna 0, caso o login estiver correto, retorna 1

if ($linha == 1) {
    $usuario_bd = mysqli_fetch_assoc($resultado); //declara um array para receber o retorno da query executada
    $_SESSION['nome'] = $usuario_bd['nome'];    //cria uma sessão `nome` para armazenar o campo `nome` que está dentro do array $usuário_bd, assim conseguiremos validá-la internamente na página `painel.php`
    header('location: painel.php'); //se o login estiver correto, redireciona para a página `painel.php`
    exit; //para fechar os cabeçalhos
} else {
    $_SESSION['nao_autenticado'] = true; //cria uma sessão para quando o login não for válido
    header('location: index.php'); //se o login for incorreto, redireciona à tela de login
    exit;
}

//echo $linha;
?>
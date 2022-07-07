<?php //esse arquivo realizará as VALIDAÇÕES
include('conexao.php'); //importa a instância da conexão, com suas constantes, assim como a variável `$conexão`

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php'); //verifica se foi digitado algo no formulário, se algum dos campos for vazio, redireciona novamente ao início
    exit(); //zera a parte de cabeçalhos
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);//essa função protege contra ataques de SQL_Injection
$senha = mysqli_real_escape_string($conexao, $_POST['senha']); //são passados 2 parâmentros: a instância da conexão e o campo digitado pelo usuário (que é o parâmetro `name` do formulário)

//cria uma variável que armazena uma query que verifica no SQL se o usuario e senha digitados são válidos, ou seja, se são os mesmos armazenados no Banco de Dados
$query = "select ID_USUARIO, USUARIO from usuario where USUARIO = '{$usuario}' and SENHA = md5('{$senha}')";

$resultado = mysqli_query($conexao,$query); //função que EXECUTA a query montada

$linha = mysqli_num_rows($resultado); //se for inseridos usuario ou senha incorretos, essa função retorna 0, se o login estiver correto, retorna 1

if ($linha == 1) { //se o retorno for igual a 1 então o login está autenticado

} else {

}
echo $linha;
?>
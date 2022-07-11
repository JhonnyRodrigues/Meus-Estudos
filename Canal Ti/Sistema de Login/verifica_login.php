<!--*Lembre-se de limpar a cache do navegador
*Esse arquivo faz a validação para impedir que a página `painel.php` seja acessada pela URL sem prévia autenticação-->
<?php
session_start(); //inicia a sessão para pegar a variável $usuário
if (!$_SESSION['usu@rio']) {    //se a sessão do usuário NÃO existir
    header('location:index.php'); //redirecione novamente para a index
    exit;
}
?>
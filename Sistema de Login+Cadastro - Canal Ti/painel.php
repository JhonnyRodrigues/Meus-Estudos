<!--lembre-se de limpar a cache do navegador-->
<?php
//session_start(); //para CAPTURAR a variável de sessão que foi armazenada no arquivo `login.php`
//print_r($_SESSION);exit; //retorna: Array ( [usuario] => Jhonny ), ou seja, a sessão criada na página `login.php` é visível nesta página `painel.php`.
include('verifica_login.php');
?>
<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<h2><a href="logout.php">Encerrar Sessão</a></h2>
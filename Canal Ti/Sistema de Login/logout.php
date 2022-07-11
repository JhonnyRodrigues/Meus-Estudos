<?php
session_start();
unset($_SESSION['berimb@u']);//destroi apenas uma sessão específica
session_destroy(); //destroi todas as sessões
header('location:index.php');
exit;
?>
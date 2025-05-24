<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Operadores Lógicos</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $anoAtual = $_GET["y"];
        $nasc = $_GET["b"];
        $idade = $anoAtual - $nasc;
        echo"Quem nasceu em $nasc tem $idade anos.";
        $voto = ($idade >=18 && $idade <=65) ? "OBRIGATÓRIO" : 'NÃO OBRIGATÓRIO'; //utilizando operadores lógicos para fazer comparação, seguidos de operadores ternários
        echo"<br>Sendo assim, seu voto é $voto";
    ?>
</div>
</body>
</html>
 
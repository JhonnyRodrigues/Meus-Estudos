<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Operador Idêntico</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $a = 3; //tipo inteiro
        $b = "3"; //tipo string
        $r = ($a == $b) ? "SIM" : "NÃO"; //operador de IGUAL
        echo"As variáveis são iguais? ".$r;
        $r = ($a === $b) ? "SIM" : "NÃO"; //operador de IDÊNTICO, além de igual valor, tem de ser do mesmo tipo
        echo"<br>As variáveis são idênticas? ".$r;
    ?>
</div>
</body>
</html>
 
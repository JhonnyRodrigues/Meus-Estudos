<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Operadores Relacionais e Ternários</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a == $b) ? "SIM" : "NÃO"; //operador IGUAL
        echo"As variáveis são iguais? ".$r;
        $r = ($a === $b) ? "SIM" : "NÃO"; //operador IDÊNTICO, além de igual valor, tem de ser do mesmo tipo
        echo"<br>As variáveis são idênticas? ".$r;
    ?>
</div>
</body>
</html>
 
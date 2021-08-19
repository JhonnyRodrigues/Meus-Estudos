<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Operadores Relacionais e Ternários</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo"Os valores passados foram $n1 e $n2";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; //se a variável `op` receber o valor 's', a variável `r` recebe a soma, do contrário, a multiplicação
        echo"<br>O resultado será $r";
    ?>
</div>
</body>
</html>
 
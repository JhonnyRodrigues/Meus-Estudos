<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Referenciando Variáveis</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = &$a;
        $b += 5;
        echo"A variável 'a' vale $a"; //basta colocar um '&' na frente da variável e, automaticamente, é criada uma referência de 'b' em relação à variável 'a'
        echo"<br>A variável 'b' vale $b";
    ?>
</div>
</body>
</html>
 
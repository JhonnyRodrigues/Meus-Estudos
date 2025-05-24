<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Operadores de Atribuição</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $preco = $_GET["p"];
        echo"O preço do produto é $preco";
        $preco *= 1.1;
        echo"<br>O NOVO preço com 10% de aumento é " . number_format($preco,2,",",".");
        $preco -= ($preco*10/100);
        echo"<br>O NOVÍSSIMO preço com um desconto de 10% é " . number_format($preco,2,",",".");
    ?>
</div>
</body>
</html>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Funções Aritméticas em PHP</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo criado pelo professor Guanabara-->
  <style>
    h2 {
      font: 15pt Arial;
      color: #171559;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"]; //não esquecer de inserir os valores na URL
        $v2 = $_GET["y"];
        echo"<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ".abs($v2);
        echo "<br>O valor de $v1<sup>$v2</sup> é ".pow($v1,$v2);
        echo"<br>A raiz de $v1 é ".sqrt($v1);
        echo"<br>O valor arredondado de $v2  é ".round($v2); //funções semelhantes também: ceil() e floor()
        echo"<br>A parte inteira de $v2 é ".intval($v2);
        echo"<br>O valor de $v1 em moeda é R$ ".number_format($v1,2,",","."); //1º parâmetro é o valor, o 2º parâmetro é a quantidade de casas decimais, o 3º parâmetro é o separador decimal e o 4º parâmetro é o separador de milhar.
    ?>
</div>
</body>
</html>
 
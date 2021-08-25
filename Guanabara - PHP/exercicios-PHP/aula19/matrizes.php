<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Matrizes</title>
  <link rel="stylesheet" href="../_css/estilo.css">
  <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
  <div>
    <pre> <!--para uma melhor visualização do código-->
      <?php
      $matriz = array( //matriz 3x2?
        array(6, 4),
        array(4, 9),
        array(3, 2)
      );
      $matriz[0][1] = $matriz[2][0]; //o valor 4 da 1ª linha passa a ser o valor da 3ªlinha, ou seja, 3.
      echo "<br>Imprimindo com a função print_r() o vetor que tem " . count($matriz) . " elementos:<br>";
      print_r($matriz);
      echo "<hr>imprimindo com a função var_dump():<br>";
      var_dump($matriz); //apresenta também o tipo dos elementos e a quantidade


      ?>
    </pre>
  </div>
</body>

</html>
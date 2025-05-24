<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Passagem de parâmetro por Valor</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>
<body>
<div>
    <?php
    //Na passagem por valor, o valor da variável externa é jogado dentro do parâmetro da função e, qualquer mudança nesse parâmetro, não altera o valor da variável.
        function teste ($x) {
          $x += 2;
          echo "<hr>O valor do parâmetro X é $x.</hr>";
        }

        $a = 3;
        teste($a);
        echo "<hr>O valor da variável A é $a.</hr>"
    ?>
</div>
</body>
</html>
 
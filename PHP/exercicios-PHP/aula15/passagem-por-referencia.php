<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Passagem de parâmetro por Referência</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>
<body>
<div>
    <?php
    //na passagem por referência, é adicionado um & (“ê comercial”) antes do parâmetro. Desse modo, o que vai para esse parâmetro não é um valor, mas sim uma referência à variável que foi passada e, assim, qualquer alteração feita nesse parâmetro também altera o valor da variável externa.
        function teste (&$x) { //esse "ê_comercial(&)" na frente do parâmetro faz toda a diferença!
          $x += 2; //então qualquer alteração em $x interfere no valor de $a
          echo "<hr>O valor do parâmetro X é $x.</hr>";
        }

        $a = 3;
        teste($a);
        echo "<hr>O valor da variável A é $a.</hr>"
    ?>
</div>
</body>
</html>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Iteração Do-While</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>
<body>
<div>
    <?php
        $cont = 20; //não se esqueça de declarar a variável antes
        do {
          echo $cont." "; //concatenação
          $cont-=2;
        } while ($cont >=1);
    ?>
</div>
</body>
</html>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Contador com laço FOR</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>
<body>
<div>
    <?php
        for ($i=1;$i<=10;$i++) { //'i' recebe 1; ENQUANTO 'i' for menor igual a 10, 'i' mais 1.
          echo "$i, ";
        }
        echo "<hr>";
        for ($i=10;$i>=0;$i--) {
          echo "$i, ";
        }
        echo "<hr>";
        for ($i=0;$i <=80;$i+=5) {
          echo "$i, ";
        }
        echo "<hr>";
        for ($i=20;$i>=0;$i-=2) {
          echo "$i, ";
        }
    ?>
</div>
</body>
</html>
 
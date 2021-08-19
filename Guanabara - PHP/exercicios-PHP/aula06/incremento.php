<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Operadores de Incremento</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $atual = $_GET["aa"];
        echo"O ano atual é $atual e o ano anterior é " . --$atual; //usando pré-decremento
        
    ?>
</div>
</body>
</html>
 
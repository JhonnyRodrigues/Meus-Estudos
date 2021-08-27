<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Valores em Formulários</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"]; //recebe o valor lá do <input> do documento HTML
        $rq = sqrt($valor);
        echo "A raiz de $valor é igual a " . number_format($rq,2,",",".");
    ?>
    <a href="formulario.html">Voltar</a> <!--link para voltar ao doc html-->
</div>
</body>
</html>
 
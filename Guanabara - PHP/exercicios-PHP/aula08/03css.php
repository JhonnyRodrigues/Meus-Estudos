<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php //É POSSÍVEL ter mais de um script numa página html
    $txt = isset($_GET["t"]) ? $_GET["t"] : "texto genérico";//caso não preencha o formulario, tais valores assumirão. //não consegui resolver: caso o ternário retorne false... não aparece o texto genérico! pq?
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
  ?>
  <meta charset="UTF-8" />
  <title>PHP modificando as CSS</title>
  <style>
    span.texto { /*seletor 'span' da classe 'texto' */
      font-size: <?php echo $tam; ?>; /*é preciso colocar a variável dentro do PHP*/
      color: <?php echo $cor; ?>;
    }
  </style>
  <link rel="stylesheet" href="../_css/estilo.css">
  <!--endereço do estilo editado pelo professor-->
</head>

<body>
  <div>
    <?php
      echo "<span class='texto'>$txt</span>";
    ?>
    <br/><a href="exercicio3.html">Voltar</a> <!--link para voltar ao doc html-->
  </div>
</body>

</html>
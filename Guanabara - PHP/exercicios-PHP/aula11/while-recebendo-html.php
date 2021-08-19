<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
  <link rel="stylesheet" href="../_css/estilo.css">
  <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
  <div>
    <?php //Que Alegria de construir isso sozinho! :D
    $cont = 1; //No PHP, é preciso declarar a variável antes de construir o loop
    while ($cont < 6) {
      $num = isset($_GET["v$cont"]) ? $_GET["v$cont"] : 0; //interessante que nem foi preciso concatenar v$cont
      echo "Valor $cont recebeu $num.<br>";
      $cont++;
    }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <!--utiliza o histórico do javascript para voltar à página anterior-->
  </div>
</body>

</html>
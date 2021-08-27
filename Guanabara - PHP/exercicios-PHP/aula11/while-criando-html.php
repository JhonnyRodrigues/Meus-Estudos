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
    <form action="while-recebendo-html.php" method="GET"><!--cria um formulário-->
      <?php
      $c = 1; //No PHP, é preciso declarar a variável antes de construir o loop
      while ($c < 6) { //cria uma iteração para produzir 5 caixas numéricas usando HTML dentro do comando echo
        echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'><br>"; //Imprime HTML dentro do comando echo // As aspas duplas não podem ficar dentro de outras aspas duplas
        $c++;
      }
      ?>
      <input type="submit" value="Enviar" class="botao">

    </form>
  </div>
</body>

</html>
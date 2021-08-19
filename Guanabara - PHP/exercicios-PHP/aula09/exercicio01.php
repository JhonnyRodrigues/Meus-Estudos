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
    <?php
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900; //pega o valor passado no formulário html
    $idade = date("Y") - $ano; //Y maiúsculo é o parâmetro para retornar ano em 4 digitos
    echo "Voce nasceu em $ano em tem $idade anos.";
    if ($idade >= 18) {
      //$v = "já pode votar";
      $d = "já pode dirigir";
    } else {
      //$v = "não pode votar";
      $d = "não pode dirigir";
    }
    echo "<br>Com essa idade, você $d"/* e $v.*/;

    //condicionais aninhadas
    if ($idade < 16) {
      $tipoVoto = "não vota";
    } elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) { //utilizando o elseif, reduz a quantidade de blocos
      $tipoVoto = "voto opcional";
    } else {
      $tipoVoto = "voto obrigatório";
    }
    echo "<br>Para essa idade, $tipoVoto";
    ?>
    <br><a href="exercicio01.html">Voltar</a>
  </div>
</body>

</html>
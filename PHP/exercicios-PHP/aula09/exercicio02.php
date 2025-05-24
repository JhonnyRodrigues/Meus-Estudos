<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Exercício Calcular Média</title>
  <link rel="stylesheet" href="../_css/estilo.css">
  <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
  <div>
    <?php
    $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0; //função isset não está funcionando por quê?
    $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0; //edit* PORQUÊÊêêêêÊ!?
    $media = ($nota1 + $nota2) / 2;
    if ($media < 5) {
      $situacao = "REPROVADO";
    } elseif ($media >= 5 && $media < 7) {
      $situacao = "EM RECUPERAÇÃO";
    } else {
      $situacao = "APROVADO";
    }
    echo "A média entre $nota1 e $nota2 é igual a $media.<br>Situação do aluno: $situacao.";
    ?>
    <br><a href="exercicio02.html">Voltar</a>
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Switch com Múltiplos Valores</title>
  <link rel="stylesheet" href="../_css/estilo.css">
  <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
  <div>
    <?php
    $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;
    switch ($d) {
      case 2: //perceba a estrutura para escolha com diversos valores
      case 3:
      case 4:
      case 5:
      case 6:
        echo "Levanta e vai estudar!   :)";
        break;
      case 7:
      case 1:
        echo "Descanse, pequeno gafanhoto!   ^^";
        break;
      default:
        echo "Dia da semana inválido";
    }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <!--utiliza o histórico do javascript para voltar à página anterior-->
  </div>
</body>

</html>
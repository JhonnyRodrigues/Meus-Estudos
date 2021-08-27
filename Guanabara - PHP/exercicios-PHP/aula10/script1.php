<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Script Switch</title>
  <link rel="stylesheet" href="../_css/estilo.css">
  <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
  <div>
    <?php
    $n = isset($_GET["num"]) ? $_GET["num"] : 0; //verifica se foi passado algum número, caso contrário será passado o valor 0
    $o = isset($_GET["oper"]) ? $_GET["oper"] : 1; //verifica se foi escolhida alguma operação, caso contrário será escolhida a operação 1(dobro)
    switch ($o) {
      case 1:
        $n = pow($n, 2);
        break;
      case 2:
        $n = pow($n, 3);
        break;
      case 3:
        $n = sqrt($n);
        break;
      default: //caso não seja nenhuma das opções acima
        echo "[ERRO]";
    }
    echo "O resultado da operação é <span class='foco'>$n<span/>"; //utiliza css para destacar
    ?>
    <br><a href="formulario1.html" class="botao">Voltar</a>
    <!--utiliza css para que o link tenha a aparência de um botão-->
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Operadores Ternários</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m = ($n1 + $n2)/2;
        echo"A média das notas $n1 e $n2 é $m<br>";
        $situacao = $m > 6 ? "aprovado" : "reprovado"; //operador ternário
        echo"O aluno está $situacao<br>";

        echo"A situação do aluno é " . (($m > 6) ? "TRANQUILA" : "PREOCUPANTE"); //é possível concatenar ternários desde que toda a expressão esteja entre parênteses(), assim não é preciso criar mais uma variável
    ?>
</div>
</body>
</html>
 
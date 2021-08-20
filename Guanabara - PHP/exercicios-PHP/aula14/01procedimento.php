<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Procedimentos</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>
<body>
<div>
    <?php //são chamados de procedimentos porque não retornam valor
        function soma($a, $b) { //cria um procedimento com 2 parâmetros
          $soma = $a + $b;
          Echo "<p>A soma vale $soma.</p>";
        }

        soma(3,4); //chama o procedimento
        soma (9,10);
        $x = 5;
        $y = 13;
        soma($x,$y);
    ?>
</div>
</body>
</html>
 
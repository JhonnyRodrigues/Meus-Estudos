<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Funções</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
    <div>
        <?php //são chamadas de funções porque retornam valor
        function soma($a, $b)
        { //cria uma função com 2 parâmetros
            $soma = $a + $b;
            return $soma; //<-- perceba que existe retorno
        }
        $x = -5;
        $y = 13;
        $r = soma($x, $y);
        echo "<p>A soma entre $x e $y é igual a $r.</p>";


        function subtracao($a,$b) {
            return $a - $b; //nem foi preciso criar uma variável local
        }
        $r = subtracao($x,$y);
        echo "<p>A subtração entre $x e $y é igual a $r.</p>";
        ?>
    </div>
</body>

</html>
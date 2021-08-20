<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Números Primos</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $mult = " "; 
            $totmult = 0;
            $result;

            for ($i=1;$i<=$n;$i++) {
                if ($n % $i == 0) {
                    $mult .= $i.", "; //concatenação
                    $totmult++;
                }
            }
            if ($totmult > 2) {
                $result = "NÃO É PRIMO!";
            } else {
                $result = "<mark><ins><em>É PRIMO!!!</em></ins></mark>";
            }

            echo "<h1>Analisando o número $n...</h1>";
            echo "<h3>Valores múltiplos:$mult</h3>";
            echo "<h3>Total de múltiplos: $totmult</h3>";
            echo "<h2>Resultado: $n <span class='foco'>$result</span></h2>";
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>

</html>
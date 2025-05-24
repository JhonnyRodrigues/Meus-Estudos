<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Taboada com Iteração FOR</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $num = isset($_GET["val"])?$_GET["val"]:0;
            $result;
            echo "<h1>Essa é a taboada do <span class='foco'>$num</span>:</h1>";
            for ($i=1;$i<=10;$i++) {
                $result = $num * $i;
                echo "$num x $i = $result<br>";
            }
        ?>
        <br><a href="taboadaFor.php" class="botao">Voltar</a>
    </div>
</body>

</html>
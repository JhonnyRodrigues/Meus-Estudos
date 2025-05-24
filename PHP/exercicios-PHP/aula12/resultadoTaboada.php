<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Taboada</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $numero = isset($_GET["val"])?$_GET["val"]:0;
        $cont = 1;
        $res = 1; //resultado
        echo "<h1><span class='foco'>Mostrando a Tabuada do $numero</span></h1>";
        do {
            $res = $numero * $cont;
            echo "$numero x $cont = $res<br>";
            $cont++;
        } while ($cont <=10 );
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Contagem</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php //PORQUEEE não funciona!?
        $inicio = isset($_GET["i"]) ? $_GET : 0;
        $fim = isset($_GET["f"]) ? $_GET : 0;
        $passo = isset($_GET["p"]) ? $_GET : 0;
        if ($inicio < $fim) {
            while ($inicio < $fim) {
                echo "$inicio ";
                $inicio += $passo;
            }
        } else {
            while ($inicio > $fim) {//contagem regressiva
                echo "$inicio ";
                $inicio -= $passo;
            }
        }
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>
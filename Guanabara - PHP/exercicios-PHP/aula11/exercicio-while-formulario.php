<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço de Iteração 'While'</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <form action="exercicio-while-resultado.php" method="GET">
            <p>
                Início: <input type="number" name="i" min="-1000" max="1000" value="10" id="">
            </p>
            <p>
                Fim: <input type="number" name="f" min="-1000" max="1000" value="20" id="">
            </p>
            <p>
                Incremento:
                <select name="p" id="">
                    <?php
                    $c = 1;
                    while ($c <= 5) { //cria 5 <options> para o <select>
                        echo "<option value='$c'>$c</option>";
                        $c++;
                    }
                    ?>
                </select>
            </p>
            <p>
                <input type="submit" value="Contar" class="botao">
            </p>
        </form>
    </div>
</body>

</html>
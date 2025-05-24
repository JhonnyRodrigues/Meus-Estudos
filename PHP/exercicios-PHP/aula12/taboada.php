<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taboada</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <form action="resultadoTaboada.php" method="$_GET">
            Número:
            <select name="val" id="">
                <?php //script para repetir 10 a tag
                $c = 1;
                do {
                    echo "<option value=$c>$c</option>";
                    $c++;
                } while ($c <= 10);
                ?>
            </select>
            &nbsp;<!-- &nbsp; "Non-breaking space"-->
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>

</html>
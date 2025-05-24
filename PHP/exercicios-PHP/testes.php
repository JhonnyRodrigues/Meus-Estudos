<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questões da Prova</title>
</head>

<body>
    <?php

    function f($v, $n)
    {
        if ($n <= 0) return 1;
        else
            return $v[$n - 1] * f($v, $n - 2) + 1; //3*2+1
    }
    $a = array(0, 1, 2, 3);
    print(f($a, 4)); //imprime '7'
    echo "<br>";

    $a = 10;
    $b = 2;
    $j = $a / 2;
    for ($i = 0; $i < $j; $i++) {
        if ($i % $b == 1)
            echo "$i"; //imprime 13
    }

    $h = 1 % 2; //retorna '1'
    echo "<br>$h";
    $y = 0 % 3; //retorna '0'
    echo "<br>$y<br>";

    $a = 5;
    $b = 3;
    $c = ($a > $b) ? true : false;
    print $c; //imprime '1';

    $x = 4;
    $y = 4;
    if ($x == $y)
        echo "<hr>comando1";
    echo "<br>comando2";

    ?>
</body>

</html>
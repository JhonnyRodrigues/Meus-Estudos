<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimate Emoticon Fight</title>
</head>

<body>
    <pre>
        <?php
        require_once 'Lutador.php';
        $lutador = new Lutador("Jhonny B. Goode", "Brasil", 30, 1.83, 80, 11, 4, 2);
        $lutador->status();
        $lutador->apresentar();
        //
        $L = array();
        $L[0] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $L[1] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $L[2] = new Lutador("DeadCode", "Astrália", 28, 1.93, 81.6, 13, 0, 2);
        $L[3] = new Lutador("UfoCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $L[4] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
        $L[2]->apresentar();
        $L[2]->perderLuta();
        $L[2]->status();
        print_r($L);
        ?>
    </pre>
</body>

</html>
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
        require_once 'Luta.php'; //nem há necessidade de importar esse arquivo aqui pois o mesmo já foi importado na classe Lutador
        $lutador = new Lutador("Jhonny B. Goode", "Brasil", 30, 1.83, 80, 11, 4, 2);
        $lutador->status();
        $lutador->apresentar();
        //
        $L = array(); //usando objetos compostos (vetor)
        $L[0] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $L[1] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $L[2] = new Lutador("DeadCode", "Astrália", 28, 1.93, 81.6, 13, 0, 2);
        $L[3] = new Lutador("UfoCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $L[4] = new Lutador("Nerdaart", "EUA", 30, 1.81, 65.7, 12, 2, 4);
        $L[2]->apresentar();
        $L[2]->perderLuta();
        $L[2]->status();
        //print_r($L);
        echo "<br>";
        $UEC01 = new Luta();
        $UEC01->marcarLuta($L[0],$L[4]);
        $UEC01->lutar();
        $UEC02 = new Luta();
        $UEC02->marcarLuta($lutador,$L[1]);
        $UEC02->lutar();
        $lutador->status();
        $L[1]->status();
        
        ?>
    </pre>
</body>

</html>
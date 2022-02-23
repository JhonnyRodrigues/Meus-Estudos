<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta(); //instanciando objeto
        $c1-> setModelo("Bic");
        $c1-> setPonta("0.8");  //alterando o atributo
        print_r($c1);
        print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}</br></br>";

        $c2 = new Caneta("Faber", "Vermelha", 0.5);
        print_r($c2);
        ?>
    </pre>
</body>
</html>
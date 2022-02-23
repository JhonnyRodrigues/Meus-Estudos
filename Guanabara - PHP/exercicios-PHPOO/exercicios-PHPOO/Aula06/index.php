<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php
            require_once "ControleRemoto.php";
            $c = new ControleRemoto;
            $c->ligar();
            $c->play();
           //$c->setVolume(10); Fatal error:  Uncaught Error: Call to private method ControleRemoto::setVolume(), ou seja, esse método é PRIVADO então não é possivel chamá-lo de outra classe
            $c->menosVolume();
            $c->ligarMudo();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->abrirMenu();
        ?>
    </pre>
</body>
</html>
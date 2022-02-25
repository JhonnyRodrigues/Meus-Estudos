<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo Polimorfismo</title>
</head>

<body>
    <pre>
            <?php
                include_once 'Mamifero.php';
                include_once 'Reptil.php';
                include_once 'Peixe.php';
                include_once 'Ave.php';
                include_once 'Lobo.php';
                include_once 'Cachorro.php';
                include_once 'Canguru.php';
                include_once 'Cobra.php';
                include_once 'Tartaruga.php';
                include_once 'Goldfish.php';
                include_once 'Arara.php';
                
                $m = new Mamifero();
                $a = new Ave();
                $r = new Reptil();
                $p = new Peixe();
                $c = new Canguru();
                $k = new Cachorro();
                $co = new Cobra();
                $t = new Tartaruga();
                $l = new Lobo();

                $m->locomover();
                $a->locomover();
                $r->locomover();
                $p->locomover();
                $c->locomover();
                $co->locomover();
                $t->locomover();
                
                $m->emitirSom();
                $a->emitirSom();
                $r->emitirSom();
                $p->emitirSom();
                $c->emitirSom();
                $co->emitirSom();
                $t->emitirSom();
                $l->emitirSom();
                $k->emitirSom();

                $k->abanarRabo();
                $k->enterrarOsso();

                          
            ?>
    </pre>
</body>

</html>
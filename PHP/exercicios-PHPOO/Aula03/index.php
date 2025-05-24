<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';  //importa a classe
        $c1 = new Caneta;   //instancia um novo objeto
        $c1->modelo = "Bic Cristal";
        $c1->cor = "Azul";
        //$c1->ponta = 0.5; o atributo está privado
        //$c1->carga = 99; idem
        //$c1->tampada = true; o atributo está protegido

        $c1->rabiscar(); //embora o atributo 'tampada' tenha visibilidade protegida, o método rabiscar(), por ser público, dá acesso a esse atributo
        print_r($c1); //detalha o objeto

        ?>
        </pre>
    </body>
</html>

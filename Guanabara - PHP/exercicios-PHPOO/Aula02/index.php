<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <?php
        require_once 'Caneta.php';  //importa a classe
        $c1 = new Caneta;   //instancia um novo objeto
        $c1->cor = "Azul";  //adicionando atributos
        $c1->ponta = "0.5";
        $c1->tampada = false;
        $c1->tampar();
      //var_dump($c1); 
        print_r($c1); //mostra o estado do objeto
        
        $c1->rabiscar(); //chamando método (mas a caneta está tampada)
        $c1->destampar();
        $c1->rabiscar();

        echo "<br/>";   //break row

         $c2 = new Caneta;
         $c2->cor = "Verde";
         $c2->carga = 50;
         $c2->tampar();
         print_r($c2);
        ?>
    </body>
</html>

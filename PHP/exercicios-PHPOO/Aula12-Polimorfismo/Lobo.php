<?php
include_once 'Mamifero.php';
class Lobo extends Mamifero
{
    //Método implementado usando polimorfismo de sobreposição
    public function emitirSom() {
        echo '<p>Lobo uivando: AUUUUuuuuuuuuuuuuuu!</p>';
    }
}

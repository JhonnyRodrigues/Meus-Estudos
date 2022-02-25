<?php
require_once 'Reptil.php';
class Tartaruga extends Reptil
{
    //Método implementado usando polimorfismo de sobreposição
    public function locomover() {
        echo '<p>Tartaruga se movendo beeeeem devagar...</p>';
    }
}

<?php
include_once 'Animal.php';
class Canguru extends Mamifero
{
    //Métodos Especiais
    public function usarBolsa()
    {
        echo '<p>Guardando na bolsa</p>';
    }
    //Método implementado usando polimorfismo de sobreposição
    public function locomover() {
        echo '<p>Canguru pulando...</p>';
    }
}

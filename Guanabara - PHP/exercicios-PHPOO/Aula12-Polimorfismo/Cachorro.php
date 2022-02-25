<?php
include_once 'Lobo.php';
class Cachorro extends Lobo
{
    //Métodos Especiais
    function enterrarOsso()
    {
        echo "<p>Enterrando osso...</p>";
    }
    function abanarRabo()
    {
        echo '<p>Abanando o rabo</p>';
    }
    //Método implementado usando polimorfismo de sobreposição
    public function emitirSom() {
        echo '<p>Cachorro latindo: Au!Au!Au!</p>';
    }
}
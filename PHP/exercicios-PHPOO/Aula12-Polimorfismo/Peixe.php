<?php
include_once 'Animal.php';
class Peixe extends Animal
{
    //Atributos
    protected $corEscama;
    
    //Métodos Especiais
    public function soltarBolha(){
        echo "<p>Peixe soltando bolhas...</p>";
    }
    
    //Métodos Implementados usando polimorfismo de sobreposição
    public function alimentar() {
        echo '<p>Peixe se alimentando...</p>';
    }
    public function emitirSom() {
        echo '<p>Peixe não emite som!</p>';
    }
    public function locomover() {
        echo '<p>Peixe nadando...</p>';
    }
    
    //Métodos Acessores
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }
}

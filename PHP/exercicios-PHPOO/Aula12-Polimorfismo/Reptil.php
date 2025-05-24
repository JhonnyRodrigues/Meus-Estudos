<?php
include_once 'Animal.php';
class Reptil extends Animal
{
    //Atributo
    protected $corEscama;
    
    //Métodos Implementados usando polimorfismo de sobreposição
    public function alimentar() {
        echo '<p>Réptil se alimentando...</p>';
    }
    public function emitirSom() {
        echo '<p>Som de Réptil...</p>';
    }
    public function locomover() {
        echo '<p>Réptil se arrastando...</p>';
    }
    
    //Métodos Acessores
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }
}

<?php
include_once 'Animal.php';
class Mamifero extends Animal {
    //Atributo
    protected $corPelo;
    
    //Métodos implementados usando polimorfismo de sobreposição
    public function alimentar() {
        echo '<p>Mamando...</p>';
    }
    public function emitirSom() {
        echo '<p>Som de mamífero</p>';
    }
    public function locomover() {
        echo '<p>Mamífero correndo...</p>';
    }
    
    //Métodos Acessores
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }
}

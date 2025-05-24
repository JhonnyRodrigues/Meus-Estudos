<?php
include_once 'Animal.php';
class Ave extends Animal
{
    //Atributo
    protected $corPena;
    
    //Método Especial
    public function fazerNinho(){
        echo "<p>Fazendo ninho...</p>";
    }
    
    //Métodos Implementados usando polimorfismo de sobreposição
    public function alimentar() {
        echo '<p>Ave se alimentando...</p>';
    }
    public function emitirSom() {
        echo '<p>Ave piando...</p>';
    }
    public function locomover() {
        echo '<p>Ave voando...</p>';
    }
    
    //Métodos Acessores
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }
}

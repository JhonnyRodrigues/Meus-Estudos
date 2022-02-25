<?php
class Visualizacao {
    //Atributos
    private $espectador;
    private $filme;
    
    //Métodos com Polimorfismo de sobrecarga
    public function avaliar1()
    {
        
    }
    public function avaliar2()
    {
        
    }
    public function avaliar3()
    {
        
    }
    //Métodos Acessores
    public function getEspectador() {
        return $this->espectador;
    }
    public function getFilme() {
        return $this->filme;
    }
    public function setEspectador($espectador): void {
        $this->espectador = $espectador;
    }
    public function setFilme($filme): void {
        $this->filme = $filme;
    }
}

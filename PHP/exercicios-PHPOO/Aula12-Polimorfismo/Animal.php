<?php

abstract class Animal {
    //Atributos
    protected $peso;
    protected $idade;
    protected $membros;
    
    //Métodos Abstratos (para ser implementados nas classes filhas)
    abstract function locomover();

    abstract function alimentar();

    abstract function emitirSom();

    //Métodos Acessores
    public function getPeso() {
        return $this->peso;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getMembros() {
        return $this->membros;
    }
    public function setPeso($peso): void {
        $this->peso = $peso;
    }
    public function setIdade($idade): void {
        $this->idade = $idade;
    }
    public function setMembros($membros): void {
        $this->membros = $membros;
    }

}

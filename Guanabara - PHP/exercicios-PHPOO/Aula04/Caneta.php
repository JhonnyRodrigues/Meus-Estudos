<?php
class Caneta {
    //declarando atributos
    private $modelo;    
    private $ponta;
    private $cor;
    private $tampada;

    //método construtor
    public function __construct()   
    {
        $this->cor = "Azul";
        $this->ponta = 0.5;    
        $this->tampar();    //quando uma nova classe Caneta é instanciada, ela já começa com cor Azul, ponta 0.5 e tampada
    }
    /*public function Caneta($m, $c, $p){  //ou podemos criar o método construtor usando o mesmo nome da sua classe
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }*/

    //métodos acessores
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($mod) {
        $this->modelo = $mod;
    }
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($pon) {
        $this->ponta = $pon;
    }

    //métodos públicos
    public function tampar(){
        $this->tampada = true;
    }
}
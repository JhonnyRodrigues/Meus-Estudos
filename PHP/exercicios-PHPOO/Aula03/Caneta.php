<?php
class Caneta {
    public $modelo;    //adicionando atributos/componentes na classe
    public $cor;
    private $ponta; //atributo privado: só posso mexer se estiver dentro dessa classe
    private $carga; 
    protected $tampada; //atributo protegido: só posso editar nessa classe ou em suas filhas.         dúvida:(((ou tbm através de funções???)))
    
    function rabiscar() {
    if ($this-> tampada == true) { //se a caneta estiver tampada
        echo "<p>ERRO! A caneta está tampada, não posso rabiscar</p>";
    } else {
        echo "<p>Estou rabiscando...</p>";
        }        
    }
    public function tampar () { //não declarar a visibilidade ainda mantém o método como publico (default)
        $this->tampada = true;
    }
    public function destampar () {
        $this->tampada = false;
    }
}

<?php
class Pessoa {
    //Atributos
    private $nome;
    private $idade;
    private $sexo;
    //Métodos Especiais
    public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
        echo $this->getNome() . " fez aniversário. Parabéns!";
    }
    //Método Construtor
    function __construct($nome,$idade,$sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    //Métodos Acessores
    function getNome()
    {
        return $this->nome;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function getSexo()
    {
        return $this->sexo;
    }
    function setNome($no)
    {
        $this->nome = $no;
    }
    function setIdade($id)
    {
        $this->idade = $id;
    }
    function setSexo($se)
    {
        $this->sexo = $se;
    }
}
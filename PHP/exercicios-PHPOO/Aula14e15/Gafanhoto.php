<?php
include_once 'Pessoa.php';
class Gafanhoto extends Pessoa
{
    //Atributos Privados
    private $login;
    private $totAssistido;

    //Método Especial
    public function viuMaisUm()
    {
        $this->totAssistido ++;
    }
    //Métodos Implementados da classe abstrata Pessoa
    protected function ganharXP($exp)
    {
        $this->experiencia += $exp;
    }
    //Método Construtor
    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo); //chamando o método construtor da classe mãe para herdar seus atributos
        $this->login = $login;
    }

    //Métodos Acessores
    public function getLogin()
    {
        return $this->login;
    }

    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    public function setLogin($login): void
    {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido): void
    {
        $this->totAssistido = $totAssistido;
    }
}

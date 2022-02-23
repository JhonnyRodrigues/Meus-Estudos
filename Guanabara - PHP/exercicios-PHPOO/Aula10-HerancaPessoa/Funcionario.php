<?php
require_once "Pessoa.php";
class Funcionario extends Pessoa
{
    //Atributos
    private $setor;
    private $trabalhando;

    //Métodos Especias
    function mudarTrabalho($novoSetor)
    {
        $this->setor = $novoSetor;
        echo "<p>A funcionária <strong>" . $this->nome . "</strong> foi movida para o setor " . $novoSetor . ".</p>";
    }
    function demitirFuncinario()
    {
        $this->trabalhando = false;
        echo "<p>A funcionária <strong>" . $this->nome . "</strong> foi demitida.</p>";
    }

    //Métodos acessores
    function getSetor()
    {
        return $this->setor;
    }
    function getTrabalhando()
    {
        return $this->trabalhando;
    }
    function setSetor($Setor)
    {
        $this->setor = $Setor;
    }
    function setTrabalhando($boolean)
    {
        $this->trabalhando = $boolean;
    }
}

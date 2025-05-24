<?php
include_once "Pessoa.php";
class Professor extends Pessoa
{
    //Atributos
    private $especialidade;
    private $salario;

    //Métodos Especias
    function receberAumento($quantia)
    {
        $salarioAnterior = $this->salario;
        $this->setSalario($this->getSalario() + $quantia);
        $porcentagem = (intdiv(($this->getSalario() * 100), $salarioAnterior) - 100);
        echo "<p>O salário do professor <strong>" . $this->nome . "</strong> recebeu um aumento de <strong>" . $porcentagem . "%</strong>. Seu novo salário agora é <strong>R$" . $this->salario . "</strong></p>";
    }

    //Métodos Acessores
    function getEspecialidade()
    {
        return $this->especialidade;
    }

    function getSalario()
    {
        return $this->salario;
    }
    function setEspecialidade($Especialidade)
    {
        $this->especialidade = $Especialidade;
    }
    function setSalario($Salario)
    {
        $this->salario = $Salario;
    }
}

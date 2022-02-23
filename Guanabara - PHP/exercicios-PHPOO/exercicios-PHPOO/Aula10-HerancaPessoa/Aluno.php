<?php
require_once "Pessoa.php"; //não esqueça de importar o arquivo
class Aluno extends Pessoa //A classe Aluno herda os atributos e métodos da classe Pessoa
{
    //Atributos
    protected $matricula; //Por que visibilidade protegida e não privada? Porque as classes Bolsista e Tecnico, filhas dessa classe Aluno, precisam ter acesso a esses atributos.
    protected $curso;
    protected $mensalidade;

    //Métodos Especiais
    function pagarMensalidade()
    {
        echo "<p>Pagando a mensalidade do aluno <strong>" . $this->nome . "</strong>, de valor <strong>R$" . $this->mensalidade . "</strong></p>";
        //A classe Aluno herda a classe Pessoa, então é possível usar seus atributos (como por exemplo: os atributos $nome,$mensalidade)
    }
    function cancelarMatricula()
    {
        $this->matricula = "cancelada";
        echo "<p>A matrícula do aluno <strong>" . $this->nome . "</strong> foi cancelada.</p>";
    }

    //Métodos Acessores
    function getMatricula()
    {
        return $this->matricula;
    }
    function getCurso()
    {
        return $this->curso;
    }
    function getMensalidade()
    {
        return $this->mensalidade;
    }
    function setMatricula($Matricula)
    {
        $this->matricula = $Matricula;
    }
    function setCurso($Curso)
    {
        $this->curso = $Curso;
    }
    function setMensalidade($Mensalidade)
    {
        $this->mensalidade = $Mensalidade;
    }
}

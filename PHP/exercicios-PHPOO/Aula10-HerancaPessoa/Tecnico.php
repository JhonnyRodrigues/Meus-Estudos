<?php
include_once "Aluno.php";
final class Tecnico extends Aluno //impede herança
{
    //Atributos
    private $registroProfissional;

    //Métodos Especiais
    public function praticar()
    {
        echo "<p>O Técnico <strong>" . $this->nome . "</strong> está praticando...</p>";
    }

    //Métodos Acessores
    function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }
    function setRegistroProfissional($registro)
    {
        $this->registroProfissional = $registro;
    }
}

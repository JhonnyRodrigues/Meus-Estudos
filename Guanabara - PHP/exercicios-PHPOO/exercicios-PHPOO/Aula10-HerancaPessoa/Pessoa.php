<?php
abstract class Pessoa //Classe Abstrata não pode ser instanciada, ou seja, não é possível criar objetos a partir dela, só podendo servir como superclasse/progenitora.
{
    //Atributos
    protected $nome; //visibilidade protegida, ou seja, a classe mãe e suas filhas têm acesso ao atributo
    protected $idade;
    protected $sexo;

    //Métodos Especias
    public final function fazerAniversario() //Método Final não permite polimorfismo, ou seja, não pode ser sobrescrito por suas subclasses. Use para garantir que um determinado algoritmo não possa ser modificado pelas subclasses.
    {
        echo "<p><strong>" . $this->nome . "</strong> fez aniversário. Parabéns!</p>";
        $this->idade++;
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
    function setNome($Nome)
    {
        $this->nome = $Nome;
    }
    function setIdade($Idade)
    {
        $this->idade = $Idade;
    }
    function setSexo($Sexo)
    {
        $this->sexo = $Sexo;
    }
}

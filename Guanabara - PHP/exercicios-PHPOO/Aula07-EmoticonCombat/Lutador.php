<?php
class Lutador
{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $empates;
    private $derrotas;

    //Métodos Implementados
    public function apresentar()
    {
        echo "<p>------------------------------------------------------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg.";
        echo "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.<br>";
    }
    public function status()
    {
        echo "<P>------------------------------------------------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria() .
            ", já ganhou " . $this->getVitorias() . " vezes, perdeu " . $this->getDerrotas() .
            " vezes e empatou " . $this->getEmpates() . " lutas.</p>";
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
    //Métodos Especiais
    function __construct($no, $na, $id, $al, $peso, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($peso); //o parâmetro $peso chama o método setCategoria()
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    private function getNome()
    {
        return $this->nome;
    }
    private function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    private function getIdade()
    {
        return $this->idade;
    }
    private function getAltura()
    {
        return $this->altura;
    }
    private function getPeso()
    {
        return $this->peso;
    }
    private function getCategoria()
    {
        return $this->categoria;
    }
    private function getVitorias()
    {
        return $this->vitorias;
    }
    private function getEmpates()
    {
        return $this->empates;
    }
    private function getDerrotas()
    {
        return $this->derrotas;
    }
    private function setNome($nom)
    {
        $this->nome = $nom;
    }
    private function setNacionalidade($nac)
    {
        $this->nacionalidade = $nac;
    }
    private function setIdade($ida)
    {
        $this->idade = $ida;
    }
    private function setAltura($alt)
    {
        $this->altura = $alt;
    }
    private function setPeso($pes) //ao declarar o peso, automaticamente encontra a categoria
    {
        $this->peso = $pes;
        $this->setCategoria();
    }
    private function setCategoria()
    {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    private function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }
    private function setEmpates($empates)
    {
        $this->empates = $empates;
    }
    private function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }
}

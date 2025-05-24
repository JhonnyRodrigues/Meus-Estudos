<?php
require_once 'Lutador.php';
class Luta
{
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    //Métodos Públicos
    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) { //não basta a categoria ser igual, deve ser idêntico, ou seja, de mesmo valor e mesmo tipo
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar()
    {
        if ($this->aprovada) {
            $this->desafiado->apresentar(); //esse método está na classe Lutador
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2); //Lembrando que o PHP PERMITE atribuir valores em variáveis ainda não declaradas
            switch ($vencedor) {
                case 0: //Empate
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiado vence
                    echo "<p>O lutador " . $this->desafiado->getNome() . " venceu!  o/</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //Desafiante vence
                    echo "<p>O lutador " . $this->desafiante->getNome() . " venceu! \o</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>A luta foi reprovada!</p>";
        }
    }
    //Métodos Especiais
    private function getDesafiado()
    {
        return $this->desafiado;
    }
    private function getDesafiante()
    {
        return $this->desafiante;
    }
    private function getRounds()
    {
        return $this->rounds;
    }
    private function getAprovada()
    {
        return $this->aprovada;
    }
    private function setDesafiado($Desafiado)
    {
        $this->desafiado = $Desafiado;
    }
    private function setDesafiante($Desafiante)
    {
        $this->desafiante = $Desafiante;
    }
    private function setRounds($Rounds)
    {
        $this->round = $Rounds;
    }
    private function setAprovada($Aprovada)
    {
        $this->aprovada = $Aprovada;
    }
}

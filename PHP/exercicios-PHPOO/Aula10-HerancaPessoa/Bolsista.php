<?php
require_once "Aluno.php";
final class Bolsista extends Aluno //Uma final class impede que se tenha herança pois ela não pode ter filhas, tornando a classe Bolsista uma folha
{
    //Atributos
    private $bolsa;

    //Métodos Especiais
    public final function renovarBolsa($porcentagem) //um método final impede o polimorfismo, ou seja, impede sobreposição(@override), isto é, não permite que ele seja sobrescrito em outra classe filha
    {
        $this->bolsa = $porcentagem;
        $valorDesconto = $this->mensalidade * $this->bolsa / 100;
        $this->mensalidade -= $valorDesconto;
        echo "<p>A bolsa do aluno <strong>" . $this->nome . "</strong> foi aplicada, sua mensalidade agora é de R$" . $this->mensalidade . ".</p>";
    }
    function pagarMensalidade() //POLIMORFISMO POR SOBREPOSIÇÃO: esse método (de mesma assinatura) está SOBRESCREVENDO o método pagarMensalidade() da classe Aluno
    {
        echo "<p><strong>" . $this->nome . "</strong> É bolsista! Então paga sua mensalidade com desconto de <strong>" . $this->bolsa . "%</strong>.</p>"; //perceba que a mensagem é diferente
    }

    //Métodos Acessores
    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function setBolsa($Bolsa)
    {
        $this->bolsa = $Bolsa;
    }
}

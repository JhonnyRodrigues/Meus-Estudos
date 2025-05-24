<?php
class ContaBanco {
//Atributos
public $NumConta;
protected $tipo;
private $dono;
private $saldo;
private $status;

//Métodos
public function abrirConta($t){
    $this->setTipo($t);
    $this->setStatus(true);
    if ($t == "CC") {
        $this->setSaldo(50);
    } elseif ($t == "CP") {
        $this->setSaldo(150);
    }
    
}
public function fecharConta(){
    if ($this->getSaldo() > 0) {
        echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
    } elseif ($this->getSaldo() < 0) {
        echo "<p>Conta possui débitos. Impossível encerrar!</p>";
    } else {
        $this->setStatus(false);
        echo "<p>A conta de " . $this->getDono() . " foi encerrada com sucesso!</p>";
    }
}
public function depositar($v){
    if ($this->getStatus()) {
        $this->setSaldo($this->getSaldo() + $v);
      //$this->saldo += $v;   //sem o método acessor
      echo "<p>Depósito de R$ {$v} autorizado na conta de " . $this->getDono() . "</p>";
    } else {
        echo "<p>Conta fechada. Impossível depositar.</p>";
    }
}
public function sacar($v){
    if ($this->getStatus()) {
        if ($this->getSaldo() >= $v) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Saque no valor de R$ {$v} autorizado na conta de " . $this->getDono() . "</p>"; //usando concatenação
        } else {
            echo "<p>Saldo insuficiente para esse saque.</p>";
        }
    } else {
        echo "<p>Não posso sacar de uma conta fechada.</p>";
    }
}
public function pagarMensalidade(){
    if ($this->getTipo() == "CC") {
        $v = 12;
    } elseif ($this->getTipo() == "CP") {
        $v = 20;
    }
    if ($this->getStatus()) {
        $this->setSaldo($this->getSaldo() - $v);
        echo "<p>Mensalidade de R$ {$v} debitada na conta de " . $this->getDono() . "</p>";
    } else {
        echo "<p>Problemas com a conta. Não posso cobrar.</p>";
    }
}

//Métodos Especiais
public function __construct()
{
    $this->setSaldo(0);
    $this->setStatus(false);
    echo "<p>Conta criada com sucesso!</p>";
}
public function getNumConta(){
    return $this->NumConta;
}
public function setNumConta($num){
    $this->NumConta = $num;
}
public function getTipo(){
    return $this->tipo;
}
public function setTipo($tip){
    $this->tipo = $tip;
}
public function getDono(){
    return $this->dono;
}
public function setDono($dono){
    $this->dono = $dono;
}
public function getSaldo(){
    return $this->saldo;
}
public function setSaldo($saldo){
    $this->saldo = $saldo;
}
public function getStatus(){
    return $this->status;
}
public function setStatus($status){
    $this->status = $status;
}
}
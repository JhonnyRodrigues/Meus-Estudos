package aula5;
public class ContaBanco{
//declarando variáveis
    public int numConta;
    protected String tipo; //`cc` ou `cp`
    private String dono;
    private float saldo;
    private boolean status; //aberta ou fechada

//método construtor
    public ContaBanco(int numConta, String dono, float saldo) {        
        this.status = false;
        this.saldo = 0f;
        
        this.numConta = numConta;
        this.dono = dono;
        this.saldo = saldo;
    }
    
//métodos acessores
    public int getNumConta() {
        return numConta;
    }

    public void setNumConta(int numConta) {
        this.numConta = numConta;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;       
    }

    public String getDono() {
        return dono;
    }

    public void setDono(String dono) {
        this.dono = dono;
    }

    public float getSaldo() {
        return saldo;
    }

    public void setSaldo(float saldo) {
        this.saldo = saldo;
    }

    public boolean getStatus() {
        return status;
    }

    public void setStatus(boolean status) {
        this.status = status;
    }
    
//métodos públicos da classe   
    public void abrirConta(String t){     
        
        if (this.getTipo().equals("cc") || this.getTipo() == "cp") {
            this.setTipo(t);
        } else {
            System.out.println("[ERRO] Conta Inválida!");
        }
        
        this.setStatus(true); //conta aberta
        
        if (this.getTipo().equals("cp")) {
            this.setSaldo(saldo += 150f);            
        } else {
            this.setSaldo(saldo += 50f);
        }
    }
    
    public void fecharConta(){
        if (this.getSaldo() > 0) {
                sacar(this.getSaldo());
                System.out.println("[ERRO] Conta com dinheiro!\nSacando R$" + this.getSaldo());
        } else if (this.getSaldo() < 0) {
                System.out.println("[ERRO] Conta em débito. Deposite R$" + Math.abs(this.getSaldo()));//Math.abs() gera valor absoluto, ou seja, positivo
        } else { //saldo zerado.
            System.out.println("Conta Encerrada");
        }
    }
    
    public void depositar(float v){
        if (this.getStatus() == true) {
            //saldo += d;
            setSaldo(getSaldo() + v);
            System.out.println("O depósito foi realizado!"); 
        } else {
            System.out.println("[ERRO] Conta fechada, impossível realizar a operação.");
        }
    }
    
    public void sacar(float v){
        if (this.getStatus() == true) {
            if (saldo > v ) {
            //saldo -= v;
            setSaldo(getSaldo() - v);  
            System.out.println("O saque foi realizado!"); 
            } else {
                System.out.println("[ERRO] Saldo insuficiente!");
            }            
        } else {
            System.out.println("[ERRO] Conta está fechada! Impossível realizar a operação.");
        }
    }
    
    public void pagarMensal(){
        if (this.getStatus() == true) {
            if (this.getTipo() == "cc" && this.getSaldo() > 12) {
                sacar(12f);
            } else {
                System.out.println("Saldo insuficiente");
            }
            if (this.getTipo() == "cp" && this.getSaldo() > 20) {
                sacar(20f);
            } else {
                System.out.println("Saldo insuficiente");
            }
        } else {
            System.out.println("[ERRO] Conta está fechada! Impossível realizar a operação.");
        }
    }
    
    public void dados() {
        System.out.println("DADOS DO CLIENTE:");
        System.out.println("Número da conta: " + this.numConta);
        System.out.println("Tipo: " + tipo);
        System.out.println("Dono: " + dono);
        System.out.println("Status: " + status);
        System.out.println("Saldo: " + saldo);
    }
}
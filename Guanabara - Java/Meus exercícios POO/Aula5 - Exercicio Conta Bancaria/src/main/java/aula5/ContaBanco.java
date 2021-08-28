package aula5;
public class ContaBanco{
//declarando variáveis
    public int numConta;
    protected String tipo; //`cc` ou `cp`
    private String dono;
    private float saldo;
    private boolean status; //aberta ou fechada

//método construtor
    public ContaBanco(int numConta, String dono) {        
        this.status = false; //atributos pré-valorados
        this.saldo = 0f;
        
        this.numConta = numConta; //atributos valorados pelos parâmetros passados na criação do objeto
        this.dono = dono;
    }
    
//métodos acessores
    public int getNumConta() {
        return this.numConta;
    }

    public void setNumConta(int nc) {
        this.numConta = nc;
    }

    public String getTipo() {
        return this.tipo;
    }

    public void setTipo(String t) { //essa variável `t` pertence apenas ao escopo LOCAL, por isso whatever seu nome
        this.tipo = t;       
    }

    public String getDono() {
        return this.dono;
    }

    public void setDono(String d) {
        this.dono = d;
    }

    public float getSaldo() {
        return this.saldo;
    }

    public void setSaldo(float s) {
        this.saldo = s;
    }

    public boolean getStatus() {
        return this.status;
    }

    public void setStatus(boolean s) {
        this.status = s;
    }
    
//métodos públicos da classe    
    public void informacoes() {
        System.out.println("DADOS DO CLIENTE:");
        System.out.println("Número da conta: " + this.getNumConta());
        System.out.println("Tipo: " + this.getTipo());
        System.out.println("Dono: " + this.getDono());
        System.out.println("Status: " + this.getStatus());
        System.out.println("Saldo: " + this.getSaldo());
    }
    public void abrirConta(String t){     
        
        if (t.equals("cc") || t.equals("cp")) {
            this.setTipo(t);
            this.setStatus(true);
            System.out.println("Conta aberta com sucesso!");
        } else {
            System.out.println("[ERRO] Esse tipo de conta não existe!");
        }
        //Bônus para novos clientes
        if (this.getTipo().equals("cc")) {
            depositar(50f);
        } else if (this.getTipo().equals("cp")) {
            depositar(150f);
        }
    }
    
    public void fecharConta(){
        if (this.getSaldo() > 0) {
                System.out.println("[ERRO] Conta com dinheiro! Sacando R$" + this.getSaldo());                
                sacar(this.getSaldo());
        } else if (this.getSaldo() < 0) {
                System.out.println("[ERRO] Conta em débito. Deposite R$" + Math.abs(this.getSaldo()));//Math.abs() gera valor absoluto, ou seja, positivo
        } else { //saldo zerado.
            System.out.println("Conta Encerrada");
        }
    }
    
    public void depositar(float v){
        if (this.getStatus() == true) { //verifica se a conta está ativa
            this.setSaldo(this.getSaldo() + v); //this.saldo = this.saldo += v (essa é uma maneira insegura)
            System.out.println("O depósito de " + v + " foi realizado na conta de " + this.getDono()); 
        } else {
            System.out.println("[ERRO] Impossível realizar a operação porque a conta está fechada.");
        }
    }
    
    public void sacar(float v){
        if (this.getStatus()) { //se tirar o trecho redundante: (== true), o programa entende mesmo assim como verdadeiro
            if (this.getSaldo() >= v ) {
                this.setSaldo(this.getSaldo() - v); //ou... saldo -= v; 
                System.out.println("Saque de R$" + v + " realizado na conta de " + this.getDono()); 
            } else {
                System.out.println("[ERRO] Saldo insuficiente para saque na conta de " + this.getDono());
            }            
        } else {
            System.out.println("[ERRO] Impossível sacar de uma conta fechada!");
        }
    }
    
    public void pagarMensal(){
        if (this.getStatus() == true) {
            if (this.getTipo().equals("cc") && this.getSaldo() > 12) {
                sacar(12f);
                System.out.println("Mensalidade paga com sucesso por " + this.getDono());
            } else if (this.getTipo().equals("cp") && this.getSaldo() > 20) {
                sacar(20f);
                System.out.println("Mensalidade paga com sucesso por " + this.getDono());
            } else {
                System.out.println("Saldo insuficiente para pagar a mensalidade!");
            }             
        } else {
            System.out.println("[ERRO] Conta está fechada! Impossível realizar a operação.");
        }
    }
}
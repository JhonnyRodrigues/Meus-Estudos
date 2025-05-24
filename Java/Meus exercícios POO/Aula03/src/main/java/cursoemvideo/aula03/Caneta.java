package cursoemvideo.aula03;
public class Caneta {
    public String modelo;
    public String cor;
    private float ponta;    //perceba a visibilidade: publico, privado e protegido
    protected int carga;
    private boolean tampada; //atributo privado
    
    public void status() {
        System.out.println("Uma caneta " + this.cor);
        System.out.println("Está tampada? " + this.tampada);
        System.out.println("Modelo " + this.modelo);
        System.out.println("Ponta " + this.ponta + "mm");
        System.out.println("Carga " + this.carga + "%");
    }
    private void rabiscar() {
        if (this.tampada == true) {
            System.out.println("[ERRO! Não é possivel rabiscar pois a caneta está tampada]");
        } else {
            System.out.println("Estou rabiscando");
        }
    }
    protected void tampar() {
        this.tampada = true; //como este método está dentro da mesma classe, é possível acessar o atributo `tampada` que está privado
        System.out.println("Tampada? " + true);
    }
    protected void destampar() {
        this.tampada = false;//embora o atributo seja PRIVATE, o método tem acesso pois está na mesma classe que esse atributo
        System.out.println("Destampada? " + true);
    }
}

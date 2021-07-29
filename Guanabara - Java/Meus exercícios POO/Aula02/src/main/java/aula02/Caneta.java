package aula02;
public class Caneta {
    String modelo;
    String cor;
    float ponta;    //5 atributos
    int carga;
    boolean tampada;
    
    void status() {
        System.out.println("Uma caneta " + this.cor);
        System.out.println("Está tampada? " + this.tampada);
        System.out.println("Modelo " + this.modelo);
        System.out.println("Ponta " + this.ponta + "mm");
        System.out.println("Carga " + this.carga + "%");
    }
    void rabiscar() {
        if (this.tampada == true) {
            System.out.println("[ERRO! Não é possivel rabiscar pois a caneta está tampada]");
        } else {
            System.out.println("Estou rabiscando");
        }
    }
    void tampar() {
        this.tampada = true;
        System.out.println("Tampada? " + true);
    }
    void destampar() {
        this.tampada = false;
        System.out.println("Destampada? " + true);
    }
}

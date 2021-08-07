package polimorfismo;
public class Reptil extends Animal {//tipo de herança: 'para diferença'
    //Atributo
    private String corEscama;
    
    //Implementando Métodos Abstratos (Polimorfismo de Sobreposição)
    @Override
    public void locomover() {
        System.out.println("Rastejando...");
    }

    @Override
    public void alimentar() {
        System.out.println("Comendo vegetais...");
    }

    @Override
    public void emitirSom() {
        System.out.println("Som de réptil...");
    }
    
    //Métodos Acessores
    public String getCorEscama() {
        return corEscama;
    }

    public void setCorEscama(String corEscama) {
        this.corEscama = corEscama;
    }
    
}

package polimorfismo;
public class Mamifero extends Animal { //tipo de herança: 'para diferença'
    //Atributo
    private String corPelo;
    
    //Implementando Métodos Abstratos (Polimorfismo de Sobreposição)
    @Override//significa "sobrepor"
    public  void locomover() {
        System.out.println("Correndo...");
    }

    @Override
    public void alimentar() {
        System.out.println("Mamando...");
    }

    @Override
    public void emitirSom() {
        System.out.println("Som de mamífero...");
    }
    
    //Métodos Acessores
    public String getCorPelo() {
        return corPelo;
    }

    public void setCorPelo(String corPelo) {
        this.corPelo = corPelo;
    }
}

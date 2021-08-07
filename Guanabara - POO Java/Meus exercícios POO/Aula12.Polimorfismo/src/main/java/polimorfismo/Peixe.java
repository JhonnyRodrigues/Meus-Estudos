package polimorfismo;
public class Peixe extends Animal { //tipo de herança: 'para diferença'
    //Atributo
    private String corEscama;
    
    //Método Público
    public void soltarBolha() {
        System.out.println("Soltando bolhas...");
    }
    
    //Implementando Métodos Abstratos (Polimorfismo de Sobreposição)
    @Override
    public void locomover() {
        System.out.println("Nadando...");
    }

    @Override
    public void alimentar() {
        System.out.println("Comendo substâncias...");
    }

    @Override
    public void emitirSom() {
        System.out.println("Peixe não faz som!");
    }
    
    //Métodos Acessores
    public String getCorEscama() {
        return corEscama;
    }

    public void setCorEscama(String corEscama) {
        this.corEscama = corEscama;
    }
}

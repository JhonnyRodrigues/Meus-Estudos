package polimorfismo;
public class Ave extends Animal { //tipo de herança: 'para diferença'
    //Atributo
    private String corPena;
    
    //Método Público
    public void fazerNinho() {
        System.out.println("Construindo ninho...");
    }
    
    //Implementando Métodos Abstratos (Polimorfismo de Sobreposição)
    @Override
    public void locomover() {
        System.out.println("Voando...");
    }

    @Override
    public void alimentar() {
        System.out.println("Comendo frutas...");
    }

    @Override
    public void emitirSom() {
        System.out.println("Piando...");
    }
    
    //Métodos Acessores
    public String getCorPena() {
        return corPena;
    }

    public void setCorPena(String corPena) {
        this.corPena = corPena;
    }
}

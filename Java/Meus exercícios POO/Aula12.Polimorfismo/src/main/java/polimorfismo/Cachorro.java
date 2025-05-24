package polimorfismo;
public class Cachorro extends Mamifero {
    //Métodos Públicos
    public void enterrarOsso() {
        System.out.println("Enterrando osso...");
    }
    
    public void abanarRabo() {
        System.out.println("Abanando rabo...");
    }
    
    //(Polimorfismo de Sobreposição)
    @Override
    public void emitirSom() {
        System.out.println("Latindo Au Au Au");
    }
}

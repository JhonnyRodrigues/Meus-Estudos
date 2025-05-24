package sobrecarga;
public class Mamifero extends Animal {
    //Atributo
    protected String corPelo;
    
    //Polimorfismo por Sobreposição
    @Override
    public void emitirSom() {
        System.out.println("Som de mamífero");
    }
    
}

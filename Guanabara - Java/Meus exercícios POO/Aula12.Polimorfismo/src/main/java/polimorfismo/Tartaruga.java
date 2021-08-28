package polimorfismo;
public class Tartaruga extends Reptil {

    @Override //polimorfismo de sobreposição
    public void locomover() {
        System.out.println("Andando beeeem devagar...");
    }
}

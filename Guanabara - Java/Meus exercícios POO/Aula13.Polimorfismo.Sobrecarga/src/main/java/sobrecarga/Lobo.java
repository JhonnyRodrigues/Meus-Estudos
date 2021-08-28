package sobrecarga;
class Lobo extends Mamifero {
    //Polimorfismo por Sobreposição
    @Override //sobrescrevendo o método da classe `Mamífero`
    public void emitirSom() {
        System.out.println("Aauuuuuuuuuu!");
    }
}

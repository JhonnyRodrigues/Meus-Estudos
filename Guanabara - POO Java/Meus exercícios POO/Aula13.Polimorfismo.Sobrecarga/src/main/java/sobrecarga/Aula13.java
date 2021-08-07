package sobrecarga;
public class Aula13 {
    //Classe Principal
    public static void main(String[] args) {
      //Animal x = new Animal(); essa classe é abstrata então não é possível criar objetos a partir dela
        Mamifero m = new Mamifero();
        Lobo l = new Lobo();
        Cachorro c = new Cachorro();
        
        //Polimorfismo com Sobreposição
        m.emitirSom();
        l.emitirSom();
        c.emitirSom();
        
        //Polimorfismo com SOBRECARGA
        c.reagir("Olá");
        c.reagir("Vai apanhar");
        c.reagir(11, 45);
        c.reagir(21, 00);
        c.reagir(true);
        c.reagir(false);
        c.reagir(2, 12.5f);
        c.reagir(17, 4.5f);
    }
}

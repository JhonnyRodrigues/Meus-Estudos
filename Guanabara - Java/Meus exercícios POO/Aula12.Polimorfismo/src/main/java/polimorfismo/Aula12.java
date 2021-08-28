package polimorfismo;
public class Aula12 {
    //Classe Principal
    public static void main(String[] args) {
        //Criando objetos, ou seja, instanciando classes:        
        //Animal a = new Animal(); é impossível instanciar uma classe abstrata!
        
        //subclasses de `Animal`
        Mamifero m = new Mamifero(); 
        Reptil r = new Reptil();
        Peixe p = new Peixe();
        Ave a = new Ave();        
        //subclasses de `Mamífero`
        Canguru k = new Canguru();
        Cachorro c = new Cachorro();
        //subclasses de `Reptil`
        Cobra j = new Cobra();
        Tartaruga t = new Tartaruga();
        //subclasses de `Ave`
        GoldFish g = new GoldFish();
        Arara e = new Arara();
        
        m.setPeso(85.3f);
        m.setIdade(2);
        m.setMembros(4);
        m.setCorPelo("Marrom");
        m.locomover(); //correndo
        m.alimentar(); //mamando
        m.emitirSom(); //som mamífero
        
        p.setPeso(0.35f);
        p.setIdade(1);
        p.setMembros(0);
        p.locomover(); //nadando
        p.alimentar(); //comendo substancias
        p.emitirSom(); //peixe não emite som
        
        a.setPeso(0.89f);
        a.setIdade(2);
        a.setMembros(2);
        a.locomover(); //voando
        a.alimentar(); //comendo frutas
        a.emitirSom(); //piando
        
        k.setPeso(55.3f);
        k.setIdade(3);
        k.setMembros(4);
        k.locomover(); //saltando (não é "correndo" porque o método foi sobrescrito)
        k.alimentar(); //mamando (não usa o polimorfismo, usa o mesmo método de sua superclasse)
        k.emitirSom(); //som mamífero
        
        c.emitirSom(); //Au Au Au
    }
}

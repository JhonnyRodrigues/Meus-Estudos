package sobrecarga;
public class Cachorro extends Lobo {
    //Polimorfismo por Sobreposição
    @Override //sobrescrevendo o método da classe `Lobo` ("mesma assinatura, classes diferentes")
    public void emitirSom() {
        System.out.println("Au!Au!Au!");
    }
    
    //Polimorfismo por SOBRECARGA
    //perceba que os 4 métodos têm o mesmo nome, mas tipos diferentes ("mesma classe, assinaturas diferentes")
    //por mais que os parâmetros sejam diferentes, o que vale é a quantidade e o tipo (independente do tipo de retorno)
    public void reagir(String frase) { //STRING
        if (frase.equals("Toma Comida") || frase.equals("Olá")) {
            System.out.println("Abanar e Latir");
        } else {
            System.out.println("Rosnar");
        }
    }
    
    public void reagir(int hora, int minuto) { //INT, INT
        if (hora < 12) {
            System.out.println("Abanar");
        } else if (hora >=18) {
            System.out.println("Abanar e Latir");
        } else {
            System.out.println("Ignorar");
        }
    }
    
    public void reagir(boolean dono) { //BOOLEAN
        if (dono) { //se dono for true
            System.out.println("Abanar");
        } else {
            System.out.println("Rosnar");
        }
    }
    
    public void reagir(int idade, float peso) { //INT, FLOAT
        if (idade < 5) {
            if (peso < 10) {
                System.out.println("Abanar");
            } else {
                System.out.println("Latir");
            }
        } else if (peso < 10) {
            System.out.println("Rosnar");
        } else
            System.out.println("Ignorar");
    }
}

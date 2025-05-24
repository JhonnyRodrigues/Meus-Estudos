package aula02;
public class Aula02 {    
    public static void main(String[] args) {
        //uma vez criada a classe `caneta`, podemos instanciar um objeto dela
        Caneta c1 = new Caneta();   //A sintaxe é: tipo, nome do objeto, palavra-reservada, nome da classe();
        c1.cor = "azul";    //string pede aspas duplas
        c1.ponta = 0.5f;    //float pede `f` após o valor
        c1.tampada = true; //chamada de um atributo
        c1.status();        //chamada de um método
        //c1.tampar();
        c1.destampar();
        c1.rabiscar();
        
        Caneta c2 = new Caneta();   //criando outro objeto
        c2.modelo = "Monblanc";
        c2.cor = "vermelha";
        c2.ponta = 0.3f;
        c2.carga = 80;
        c2.tampar();
        c2.status();
        c2.rabiscar();
    }
}

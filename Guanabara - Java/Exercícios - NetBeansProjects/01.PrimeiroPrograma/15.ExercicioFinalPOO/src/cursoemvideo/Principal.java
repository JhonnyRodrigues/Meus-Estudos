
package cursoemvideo;

public class Principal {

    public static void main(String[] args) {
        
        Fatorial f = new Fatorial();  //cria um objeto (chamado f) que HERDA os métodos abaixo, da classe Fatorial
        f.setValor(5);  //atribui o valor/parâmetro (5) ao método `setValor`, que está dentro da classe `Fatorial`
        System.out.print(f.getFormula());   //escreve a fórmula
        System.out.println(f.getFatorial()); //escreve o valor do fatorial já calculado (=120)        
    }
//o programa ficou pequeno pq tem apenas a classe`Fatorial`, então fazemos apenas as chamadas de seus métodos
}

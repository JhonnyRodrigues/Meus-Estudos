        //É uma estrutura de  repetição dentro da outra
package pkg13.pkg1.lacoaninhado;

public class LacoAninhado {
   
    public static void main(String[] args) {
        
        for (int j = 1; j <= 3; j++) {  //perceba que a declaração do for each é separada por ponto-virgula
            for (int k = 0; k <3; k += 2) { // o k, quando estoura, volta a valer 0. Quando estoura, não imprime
                System.out.println(j + ", " + k);
            }
        }
        
    }
    
}

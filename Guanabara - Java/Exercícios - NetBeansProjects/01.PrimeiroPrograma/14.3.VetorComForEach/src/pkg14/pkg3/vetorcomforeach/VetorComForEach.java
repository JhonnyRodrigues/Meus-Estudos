
package pkg14.pkg3.vetorcomforeach;

public class VetorComForEach {

    public static void main(String[] args) {

        int num [] = {3,5,1,8,4};
        for (int valor: num) {  //atenção para o (:), a condição diz: "para cada elemento de 'num', coloque em 'valor'"
            System.out.println(valor);
        }
        
        //OUTRO EXEMPLO
        double v[] = {3.5,2.75,-4,9.25};
        for (double valor : v) {    //estrutura de repetição for each que printa o vetor
            System.out.print(valor + " ");
        }
    }
}

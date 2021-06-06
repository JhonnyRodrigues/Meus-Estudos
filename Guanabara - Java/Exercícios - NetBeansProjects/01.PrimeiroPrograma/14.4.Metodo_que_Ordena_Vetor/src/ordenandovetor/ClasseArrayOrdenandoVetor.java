
//Array significa Vetor/matriz
package ordenandovetor;

import java.util.Arrays;    //Arrays é uma classe que está dentro da biblioteca .util


public class ClasseArrayOrdenandoVetor {

    public static void main(String[] args) {
        
      //COLOCANDO VETOR EM ORDEM CRESCENTE
        int num [] = {3,5,1,8,4}; //declarando vetor
        Arrays.sort(num);         //classe arrays, 'num' é o nome do vetor, só isso e vc ordena o vetor inteiro!
        for (int valor: num) {    //estrutura de repetição FOR EACH para escrever o vetor ns tela
            System.out.print(valor + ", ");
        }
    }
}

//ESSE MÉTODO PERMITE RASTREAR O ELEMENTO DENTRO DO VETOR
//só funciona se o vetor estiver ORDENADO!
//lema do BinarySearch: dividir para conquiStar
package cursoemvideo;

import java.util.Arrays;

public class BinarySearch {
   
    public static void main(String[] args) {

        int vet [ ] = {3, 7, 6, 1, 9, 4, 2};    //declaração do vetor
        Arrays.sort(vet);    //para rastrear por BinarySearch é necessário ordenar o vetor!
        for (int v:vet) {   //estrutura de repetição for each para escrever o vetor na tela
            System.out.print(v + ", ");
        }
        System.out.println(" ");
        int posicao = Arrays.binarySearch(vet,6);   //o primeiro parâmetro identifica o nome do vetor e o segundo parâmetro identifica a chave a ser procurada
        System.out.println("Encontrei o valor na posição " + posicao);  //se retornar um valor negativo, é pq não foi encontrada a chave
    }
}


package pkg14.pkg1.vetores;

public class Vetores {

    public static void main(String[] args) {

      //int vet[] = new int [6]; tbm poderia ser criado assim, e depois teria de preenchê-lo
        int vet [] = {2,5,1,7,3,6}; //cria um vetor de 6 posições, já preenchendo com
        System.out.println("O total de casas do vetor é " + vet.length + ":");  //"lenght" é o metodo para determinar o comprimento do vetor
        for (int c = 0; c <= 5; c++) {  //cria um contador de 0 até 5
      //for (int c = 0; c<= vet.length -1; c++) {  //ESTRUTURA DE REPETIÇÃO GENÉRICA, FUNCIONA PARA QUALQUER TAMANHO DE VETOR
            System.out.println("Na posição " + c + " Temos o valor " + vet[c]);
        }

    }
    
}

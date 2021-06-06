
//1º CRIE UM VETOR COM TAMNHO DESEJADO, DEPOIS USE O AUTOFILLL PRA PREENCHER COM O VALOR DESEJADO
package cursoemvideo;

import java.util.Arrays;    //importa biblioteca com classe para trabalhar com vetores

public class PreencherAutomaticoVetor {

    public static void main(String[] args) {

        int vet[] = new int [20];   //cria um vetor de 20 posições
        Arrays.fill(vet, 8);        //USA A CLASSE ARRAYS PARA ATRIBUIR 8 A TODOS OS ÌNDICES DO VETOR VET
        for (int mostrar:vet){     //for each para mosrar o vetor
            System.out.print(mostrar + ",");
        }
    }
}

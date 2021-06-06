
package pkg14.exercícios.vetordentrodevetor;

public class ExercíciosVetorDentroDeVetor {
    
    public static void main(String[] args) {

        int v [] = {2,0,3,0};   //declara um vetor de 4 posições de nome "v"
        v [v[2]] = v [v[1]];    //Vetor[2] = 2                                
        for (int i:v){  //for each para imprimir os novos elementos do vetor v
            System.out.print(i);
        }
    }
    
}

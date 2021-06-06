
package pkg12.exercicios.pegadinha;

//  ESTUDE ANTES DE DAR PLAY: quantos numeros aparecerão?
public class ExerciciosPegadinha {
  
    public static void main(String[] args) {

        int c = 1;
        do {
            if (c % 5 != 0) System.out.println(c);  //ou seja, se `c` não for múltiplo de 5, então c printa na tela `c`
            else break; //AQUI está a pegadinha!-------------------------------------------------------------o comando break termina toda iteração 
            c++;
        } while (c<=10);
    }   
}

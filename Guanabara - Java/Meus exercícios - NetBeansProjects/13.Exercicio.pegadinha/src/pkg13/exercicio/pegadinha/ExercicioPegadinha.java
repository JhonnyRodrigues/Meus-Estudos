
//quando executar o prog, QUE NÚMEROS IRÃO APARACER?
package pkg13.exercicio.pegadinha;

public class ExercicioPegadinha {
    
    public static void main(String[] args) {

        for ( int i = 0; i <=15; i +=2) {
            if (i%3 == 0) continue; //O COMANDO CONTINUE FAZ VOLTAR PRO TOPO DO LOOP, então não printa o número
            System.out.print(i + " ");
    }
    }
}

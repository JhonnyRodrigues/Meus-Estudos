//   COMPARANDO ESTRUTURAS DE REPETIÇÃO WHILE, DO e FOR
package pkg13.repeticaofor;

public class RepeticaoFor {
    
    public static void main(String[] args) {
        //PARA
        //nessa estrutura de repetição, não foi necessário declarar variável
        for (int c = 0; c <= 71; c+= 10) { /*O 1º ponto-e-virgula declara o início do loop, 
            o 2º declara o “até”, e o 3º é o passo (de quanto em quanto), lembrando do operador de atribuição(+=)
      */System.out.println("CAMBALHOTA " + c);
        }
/*////////////////////////////////////////////////////////////////////////
        //ENQUANTO
        int c = 0;
        while (c <= 3) {
        System.out.println("Cambalhota" + c);
        c++;
        }
/////////////////////////////////////////////////////////////////////////
        //REPITA
        int c = 0;
        do {
            c++;
            System.out.println("Cambalhot" + c);
        } while (c <=3);
        */
    }    
}

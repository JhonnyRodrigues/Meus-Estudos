//este programa apresenta o CONTINUE e o BREAK
package repeticaowhile;

public class RepeticaoWhile {

    
    public static void main(String[] args) {

        int cc = 0; //declara variavel cambalhota
        while (cc<=10) { //enquanto variável é menor-igual a 10, então...
            cc++;   //não esquecer do incremento, senão ficará num looping eterno
            
            if (cc==3 || cc==4) {   //começa uma condição para pular o print
                continue;   //o comando 'continue' interrompe o fluxo de repetição e retorna para o topo do laço/loop
            }               // dessa forma ele não printa as cambalhotas 3 e 4
            if (cc==8) {
                break;      //já o comando 'break' faz o contrário, jogando para fora do loop/laço 'while'
            }               //não chegando a executar cambalhotas de 8 a 10.
                System.out.println("cambalhota " + cc);
        }
    }    
}

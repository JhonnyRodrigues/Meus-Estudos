
package pkg12.pkg1.repetiçãodo;

public class RepetiçãoDo {

    public static void main(String[] args) {
        
        //contador de cambalhotas
        int cc = 0;//note que o teste é feito no fim da iteração
        do {
            cc++;
            System.out.println("cambalhota " + cc); //perceba o LN para pular linha
        } while (cc<4); //na estrutura de repetição 'do' é como se fosse um 'while' invertido
                        // não esqueça de fechar o bloco para só depois colocar a condição
        //CUIDADO! cc <4; na repetição DO: o sinal de igualdade é contrario das repetição WHILE
    }
    
}


package pkg10.switch_case;

import java.util.Scanner;

public class Switch_Case {
    
    public static void main(String[] args) {
        
        //estrutura CONDICIONAL DE MULTIPLA ESCOLHA
        Scanner teclado = new Scanner(System.in);   //cria um objeto 'teclado' para poder chamar o método de monitorar a entrada de dados
        System.out.print("Quantas pernas? ");
        int perna = teclado.nextInt(); //o objeto teclado vai ler a entrada do sistema e jogar na variavel 'perna'
        String tipo;    //é preciso declarar a variável, aqui é uma string classe invólucro(WRAPPER)
                
        switch (perna) {    //o que o usuario colocou será ESCOLHIDO como caso
            case 1:         //termina com dois-pontos
                tipo = "saci";
                break;      //b minúsculo   NÃO ESQUECER DO BREAK nem do (;)
            case 2:
                tipo = "bípede";
                break;
            case 3:
                tipo = "tripé";
                break;
            case 4:
                tipo = "quadrúpede";
                break;
            case 6:
                tipo = "aranha";
                break;
            case 8:
                tipo = "aranha gigante!";
                break;
            default:
                tipo = "centopéia";
                break;  //este break apos o default é facultativo/redundante
    }
        System.out.println("Isso é um(a) " + tipo);
    }    
}

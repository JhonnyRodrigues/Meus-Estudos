
package cursoemvideo;

import java.util.Calendar;  //mnote biblioteca para entregar o ano atual
import java.util.Scanner;

public class SituacaoIdade {        
 
    public static void main(String[] args) {
        
        
        System.out.print("Em que ano vc nasceu? ");
        Scanner teclado = new Scanner(System.in);
        int nascimento = teclado.nextInt();
        int ano = Calendar.getInstance().get(Calendar.YEAR); //recebe ano atual
        float idade = ano - nascimento; //deixei a idade como float só para demonstrar como se formata um float logo abaixo
        if (idade >=18) {       //NÃO ESQUECER DE ABRIR OS BLOCOS COM AS CHAVES
            System.out.printf("Sua idade é %.0f anos e você é Maior de idade\n", idade);
          //System.out.println("Sua idade é " + idade + " e você é Maior de idade"); imprimindo por concatenação
        }   else {
            System.out.printf("Sua idade é %.0f anos e você é Menor de idade\n", idade);
        }
        
        
    }
    
}

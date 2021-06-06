
package pkg09.programamedia;

import java.util.Scanner;

public class ProgramaMedia {

    public static void main (String[]args){
        
    Scanner teclado = new Scanner(System.in);   //cria um objeto `teclado` da classe `Scanner` que monitora a entrada de dados do Systema
        System.out.print("Qual a 1ª nota? ");
    float n1 = teclado.nextFloat(); //usa a função do objeto `teclado` de pegar o próximo float
        System.out.print("Qual a 2ª nota? ");
    float n2 = teclado.nextFloat();
    float m = (n1 + n2) / 2;
        System.out.println("Sua média foi " + m);
        if (m > 9) {
            System.out.println("Parabéns pequeno gafanhoto!");
        }
    }
}

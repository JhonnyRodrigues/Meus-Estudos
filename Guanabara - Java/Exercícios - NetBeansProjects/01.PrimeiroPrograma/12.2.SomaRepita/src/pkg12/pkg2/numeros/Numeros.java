
package pkg12.pkg2.numeros;

import java.util.Scanner;   //importou a biblioteca Scanner

public class Numeros {

    public static void main(String[] args) {

        int numero, soma = 0;
        Scanner teclado = new Scanner(System.in);   //temos um objeto teclado para entrada(in) de dados, a palavra que se repete é SCANNER! CUIDADO!
        String resposta;    //objeto string
        
        do {
            System.out.print("Digite um número: ");  //sem ln para não quebrar a linha
            numero = teclado.nextInt(); //var `numero` recebe o imput(de tipo inteiro) do teclado pelo usuario
            soma += numero; //soma = soma+numero    operador de atribuição
            System.out.print("Deseja continuar? [S/N] ");
            resposta = teclado.next(); // ou pode ser 'teclado.nextLine' já que é uma string
        } while (resposta.equals("s")); // o método equals' compara o conteúdo e não o tipo, assim não dá conflito de tipos incompatíveis
        System.out.println("A soma de todos os valores é: " + soma);    //string concatenada com var soma
    }
    
}

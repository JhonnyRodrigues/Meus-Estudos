
package pkg12.pkg6.exercicios.analisandonumeros;

import javax.swing.JOptionPane; //importa biblioteca 

public class ExerciciosAnalisandoNumeros {

    public static void main(String[] args) {

        int n, soma = 0, total = -1, par= -1, impar=0, acima=0;  //  é IMPORTANTE atribuir valor para as variaveis!
        float media;    // par e total = -1 pq é preciso digitar (0) para sair
        //edit*: "Ahh! mas começando negativo(-1) não vai dar ruim no final???
        //resposta: zero é PAR. Quando o usuário quiser encerrar, ele precisará digitar zero(0), assim, ele inserirá um número a mais no total e que tbm é um número PAR
        do{ //estrutura de repetição equivalente ao comando REPITA
            n = Integer.parseInt(JOptionPane.showInputDialog(null, 
            "<html><em>Digite um valor: </em></html>", "Valor 0 interrompe"));//coloca na var 'n' o valor digitado pelo user         
            total++;
            soma += n;
            if (n % 2 == 0) {   //verifica se numero digitado é par
                par++;
            } else {
                impar++;
            }            
            if (n>100) {
                acima++;
            }            
        } while (n!=0);     //loop enquanto n diferente de 0
        media = soma / total;
        //na primeira virgula o null é para atribuir nome à janela, a segunda virgula descreve a mensagem na tela
        JOptionPane.showMessageDialog(null,"<html><em>Sobre os valores digitados: <hr>" + 
                "<br>Total de valores: " + total +
                "<br>Total de Pares: " + par + 
                "<br>Total de Ímpares: " + impar + 
                "<br>Valores acima de cem(100): " + acima +
                "<br>Soma dos valores: " + soma +
                "<br>Média dos Valores: " + media + "<hr></html>");    //a tag <hr> quebra linha TEMATICAMENTE
    }
    
}

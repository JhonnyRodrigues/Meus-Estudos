
package pkg12.telapronta.exercicio;

import javax.swing.JOptionPane;

public class TelaProntaExercicio {

    public static void main(String[] args) {

         // as vírgulas separam o nome da janela, mensagem na tela, título na janela, ícone de info
        javax.swing.JOptionPane.showMessageDialog(null, "Olá Humano!", "Boas Vindas", javax.swing.JOptionPane.INFORMATION_MESSAGE);

        int n = Integer.parseInt(JOptionPane.showInputDialog(null,"Informe um número:", "Entre 1 e 10!"));   //a var n recebe o número colocado no Pane
        JOptionPane.showMessageDialog(null, "Você digitou o valor: " + n);  //mostra um Pane com o valor digitado
    }
    
}

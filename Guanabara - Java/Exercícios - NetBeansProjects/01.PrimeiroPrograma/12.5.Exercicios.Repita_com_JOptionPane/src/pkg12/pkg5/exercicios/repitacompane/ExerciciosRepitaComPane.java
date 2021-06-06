
package pkg12.pkg5.exercicios.repitacompane;

import javax.swing.JOptionPane;

public class ExerciciosRepitaComPane {

    public static void main(String[] args) {

        int n, soma=0;        
        do {
            n = Integer.parseInt(JOptionPane.showInputDialog(null,  //perceba que o comando só acaba no ponto-e-vírgula(;)
            "<html><em>Informe um número: </em></html>", "Valor 0 interrompe"));    //a tag <html><em> deixa em itálico (enfase)
            soma+=n;    //soma recebe soma + n            
        } while (n != 0);   //enquanto n for diferente de 0
        JOptionPane.showMessageDialog(null, "<html>Resultado Final <br>-----------------------" +   // a tag <br> quebra-linha
                "<br>A soma dos Números é:  <hr>" + soma);                                          // a tag <hr> quebra-linha temática
    }
    
}

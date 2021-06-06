
package resolucaotela;

import java.awt.Dimension;
import java.awt.Toolkit;

public class ResolucaoTela {

    public static void main(String[] args) {
        
        Toolkit tk = Toolkit.getDefaultToolkit();//usa o método(getDefault) da classe(Toolkit) e armazena em (tk)
        Dimension d = tk.getScreenSize();   //atribui à (d) o valor do método(getScreenSize)
        System.out.println("A resolução de sua tela é "+d.width + " x " +d.height);//concatena a string + resolução
        
    }
    
}

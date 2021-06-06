
/*Essa classe foi COPIADA do exercicio anterior "exerciociofinalpoo", para isso, segurei 
a tecla [Ctrl] e arrastei para dentro do novo projeto, no mesmo pacote da classe (TelaFatorial)*/
package cursoemvideo;

public class Fatorial {
    //a classe fatorial tem 3 atributos:
    private int num = 0;    //num para calcular o fatorial
    private int fat = 1;    //o fatorial desse numero
    private String formula = "";    //e a fórmula
    
    public void setValor(int n) {   //método que vai calcular o fatorial e a fórmula dele
        num = n;
        int f = 1;
        String s = "";
        
        for (int c = n; c > 1;c--) {
            f *= c;
            s += c + " x ";
        }
        
        s += "1";    //concatenar a string após o for each
        fat = f;
        formula = s;
    }
    public int getFatorial() {  //método para pegar o valor do fatorial
         return fat;
    }
    public String getFormula() {    //método para pegar a formula do fatorial
        return formula; 
    }    
}

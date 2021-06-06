
/*Essa nova classe(Fatorial) foi criada, pensando em ser aproveitada por outros programas.
Reutilizando, assim, seu código através dos principios do encapsulamento*/
package cursoemvideo;

public class Fatorial {
    //a classe fatorial tem 3 atributos:
    private int num = 0;    //para calcular o fatorial
    private int fat = 1;    //o resultado do fatorial desse numero
    private String formula = "";    //e uma string para apresentar a fórmula
    
    public void setValor(int n) {   //método(procedimento) que vai calcular o fatorial e a fórmula dele, com 1 parâmetro(int n)
        num = n;    //num ficou verde pq ele é atributo e não uma variável simples. E (n) virou uma variavel LOCAL simples
        int f = 1;
        String s = "";
        for (int c = n; c > 1; c--) {    //Iteração FOR que calcula de `num` até (1)
            f *= c; //fatorial * contador
            s += c + " x "; //String `s` concatenada com `c`, concatenada com sinal de multiplicação(x)
        }
        s += "1 = ";    //concatenar na string após o FOR, experimente sem essa linha e veja o que acontece
        fat = f;    //o atributo (fat) recebe (f)
        formula = s;
    }
    public int getFatorial() {  //método público para pegar/retornar o valor do fatorial
         return fat;
    }
    public String getFormula() {    //método público para pegar/retornar a fórmula do fatorial
        return formula; 
    }    
}

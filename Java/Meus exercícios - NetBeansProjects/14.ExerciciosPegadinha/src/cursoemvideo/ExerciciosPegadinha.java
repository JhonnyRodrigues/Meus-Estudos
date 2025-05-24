
//O VETOR LÊ A STRING DE TRÁS PARA FRENTE PORÉM, QUANDO PRINTA, ESTARÁ COMO {JONATAS}
package cursoemvideo;

public class ExerciciosPegadinha {

    public static void main(String[] args) {

        String s = "JONATAS";   //essa string `s` é um objeto, já que é de uma classe. Sendo assim, ela possui métodos(como o length)
        char [] r = new char [7];  //aqui é um vetor do tipo char, de 12 posições // cuidado! no Java, uma string não é um vetor de char
        for (int c = s.length()-1; c>=0;c--){   //contador vai de 6 até 0 (7 posições)    lenght é um método para determinar o comprimento de uma string
            r[c] = s.charAt(c); //vetor `r` na posição do contador `c` vai receber caractere na posição `c`, através do método charAt()
        }                       //então o loop vai varrendo o vetor de trás para frente e preenchendo-o
        for (char h:r) {    //por fim,o for each vai desde a PRIMEIRA até a ÚLTIMA posição printando o vetor 
            System.out.print(h);            
        }
        System.out.println("");
    }
}

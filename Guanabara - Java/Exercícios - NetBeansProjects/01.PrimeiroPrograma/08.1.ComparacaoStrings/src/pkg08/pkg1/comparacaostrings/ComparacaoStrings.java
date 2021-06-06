
package pkg08.pkg1.comparacaostrings;

public class ComparacaoStrings {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        //ENSINADO O METODO EQUALS
        String nome1 = "Jonatas";               //aqui foi criada uma variável
        String nome2 = "Jonatas";
        String nome3 = new String ("Jonatas");  //aqui foi criado um objeto, então ele não tem, tecnicamente, a mesma estrutura dos 2 de cima, então nao são iguais
        String resultado;                       // 
        resultado = (nome1.equals(nome3))?"igual":"diferente"; // o método "equals' verifica se o conteúdo de um objeto é igual ao conteúdo do outro
        System.out.println(resultado);
        
        //OUTRO EXEMPLO
        String parte1 = "Curso";
        String parte2 = "Video";
        String parte3 = parte1 + parte2;      
        String parte4 = "CursoVideo";
        System.out.println(parte3==parte4);
        System.out.println(parte3.equals(parte4));// O RESULTADO SAI EM BOOLEANO
        
        //EXERCICIO COM PEGADINHA
        //               F              F            repare aqui
        boolean val1 = (4>=5), val2 = (4<4), val3 = (val1==val2);   // val1 e val2 tem a mesma lógica(F)
        //              F   ^   V   = V     XOR
        boolean val4 = val1 ^ val3;
        //                V  e   V  = V     AND
        boolean val5 = !val2 && val4;
        System.out.println(val4 +" " + val5);
        
    }
    
}

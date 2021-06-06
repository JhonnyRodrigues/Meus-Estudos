
package pkg08.pkg1.comparacaostrings;

public class ComparacaoStrings {

    public static void main(String[] args) {
        
        //São criadas 4 strings para aplicar o METODO EQUALS
        String nome1 = "Jonatas"; //aqui foi criada uma variável do tipo string
        String nome2 = "Jonatas";
        String nome3 = new String ("Jonatas");  //aqui foi criado um objeto, então ele não tem, tecnicamente,
        //a mesma estrutura das 2 strings acima, não sendo, portanto, iguais
        String resultado;                       // 
        resultado = (nome1.equals(nome3))?"igual":"diferente";
        // o método "equals' verifica se o conteúdo de um objeto é igual ao conteúdo do outro
        System.out.println(resultado);
        
        //OUTRO EXEMPLO
        String parte1 = "Curso";
        String parte2 = "Video";
        String parte3 = parte1 + parte2;      
        String parte4 = "CursoVideo";
        System.out.println(parte3==parte4); // O RESULTADO de equals SAI EM BOOLEANO
        System.out.println(parte3.equals(parte4));  // O RESULTADO SAI EM BOOLEANO
        
        
        //EXERCICIO COM PEGADINHA
        //               F              F            repare aqui
        boolean val01 = (4>=5), val2 = (4<4), val3 = (val01==val2);//val01 e val2 tem a mesma lógica booleana(F e F, então V)
        //              F   ^   V   = V     
        boolean val4 = val01 ^ val3;                //o operador (^) é XOR
        //                V  e   V  = V     
        boolean val5 = !val2 && val4;               //o operador (&&) é AND
        System.out.println(val4 + " " + val5);
        
    }
    
}

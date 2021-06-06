
package tiposprimitivos;

import java.util.Scanner;   //biblioteca para entrada de dados no programa

public class TiposPrimitivos {
    
    public static void main(String[] args) {
        
        Scanner blahblah = new Scanner(System.in); //objeto(blahblah) da classe importada(Scanner) que vai monitorar a entrada de dados
        //(o java vai pedir para importar uma biblioteca scanner)
        System.out.print("Digite o nome do aluno: ");
        String nome = blahblah.nextLine();  // cria uma string(nome) que recebe o retorno de uma função do objeto(blahblah) para ler a entrada de dados
        System.out.print("Digite a nota do aluno: ");
        float nota = blahblah.nextFloat();
        //String nome = "Jonatas";       pedi pra perguntar ao invés de já inserir
        //float nota = 8.5f;             idem
        System.out.printf("A nota de %s é %.2f \n",nome,nota);
        /* perceba que o print foi sem concatenação(+), para isso optou-se pelo "estilo linguagem C", 
         *Atenção para o (%) que é usado para indicar a inserção de uma variável dentro da string (neste caso, uma string e um float).
         *O .2 determina a quantidade de casas decimais do float. A contrabarra (\n) é pra pular linha. 
         *Não esqueça das vírgulas no fim, entre as variáveis.
        */
    }
    
}

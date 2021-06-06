
//perceba que nesta classe não há nenhum método main, e nem precisa pois aqui será colocado apenas os métodos de operações
package cursoemvideo;

public class Operacoes {    
    
        static String contador(int inicio, int fim) {  //método que vai retornar uma string
            //torne ele static para poder funcionar dentro do método main, isso é, pode fazer chamada sem instanciar nenhum objeto
            //torne ele public para poder ser acessado por todos
            String s = "";  //cria uma string vazia
            for (int c = inicio; c <= fim; c++) {
                s += c + " ";   //`s` recebe ele mesmo + `c`, concatenado com um espaço em branco
        }
        return s;   //retorna a string `s`(com uma contagem dentro dela)
    }
//agora é preciso chamar esse método, e a chamada está dentro de outro arquivo: ClassePrincipal.java
}

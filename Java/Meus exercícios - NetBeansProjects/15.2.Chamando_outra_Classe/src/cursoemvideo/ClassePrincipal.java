
//Perceba que dentro do pacote cursoemvideo existem 2 classes: ClassePrincipal e Operações
package cursoemvideo;

public class ClassePrincipal {
    
    public static void main(String[] args) {
        
        System.out.println("Vai começar a contagem:");
        //para chamar um método de outro arquivo, coloque o nome da classe antes do método:
        System.out.println(Operacoes.contador(1,5));    //chama o método `CONTADOR` que está dentro da classe `OPERACOES`, com os parâmetros (1,5)
    }
}

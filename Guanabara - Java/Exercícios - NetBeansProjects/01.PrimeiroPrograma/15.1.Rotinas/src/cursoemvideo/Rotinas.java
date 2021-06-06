package cursoemvideo;

public class Rotinas {  
            //SEGUE ABAIXO O EXEMPLO DE UM  MÉTODO SEM RETORNO (PROCEDIMENTO)
    static void somap (int a, int b) {  //cria um procedimento com 2 parâmetros: a e b, é preciso que ele seja estático
        int s = a + b;  //a variavel (s) tem escopo LOCAL, então ela não funciona na função principal(main), apenas dentro dessa rotina
        System.out.println("A soma do procedimento é " + s);
    }   //não esqueça de fechar o bloco
    
            //SEGUE ABAIXO UM EXEMPLO DE MÉTODO COM RETORNO (FUNÇÃO)
    static int somaf (int a, int b) {   //a diferença é que, ao invés de void, colocou-se o tipo de retorno que, no caso: foi int
        int s2 = a + b;
        //System.out.println("A soma da função é " + s2);   uma BOA PRÁTICA de programação é deixar as rotinas responsáveis apenas pelos cálculos
        return s2;  //quando retornar s2, irá retornar um valor inteiro 
    }
    
    public static void main(String[] args) {  //main é um método que não retorna valor(por ser void), 
        //que recebe um vetor como parâmetroe, e que é um método estático e público.
        System.out.println("Começou o programa!");
        somap (5,2); //chama o procedimento (que não tem var de retorno então só vai printar a soma)
        int sm = somaf(3,7);    //uma das maneiras de chamar uma função é atribuindo o valor de retorno`s2` a uma variavel`sm`
        System.out.println("A soma da função é " + sm); //print no método principal e não nas rotinas para não engessar o programa  ISSO É UMA BOA PRÁTICA DE PROGRAMAÇÃO
        
    }
    
}

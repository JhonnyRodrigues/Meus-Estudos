
//funções podem ser parâmetros para outras funções.
package cursoemvideo;

public class FuncaoEmFuncao {
    
    //3  funções são declaradas antes do método main
        static int f1 (int n) {
            return n % 2;   //3%2=1
        }
        static int f2 (int n) {
            return n * 2;   //5*2=10
        }
        static int f3 (int a, int b) {
            return a + b;   //1+10=11
        }
        
    public static void main(String[] args) {

        System.out.println(f3(f1(3),f2(5)));    //return de f1 é 1, return de f2 é 10, então os parâmetros de f3 são (1,10)
    }
}


package pkg08.operadorternario;

public class OperadorTernario {    

    public static void main(String[] args) {
        
        //IF e ELSE ternários
        int b1, b2, r;
        b1 = 4;
        b2 = 8;
        r = (b1>b2) ? 0 : 1; //Se b1 > b2 for VERDADEIRO então r recebe 0, senão r recebe 1
        System.out.println(r);

        int n1, n2, r2;
        n1 = 4;
        n2 = 8;
        r2 = (n1>n2) ? n1 : n2; //o mesmo vale para variáveis
        System.out.println(r2);
        
                               
    }
    
}

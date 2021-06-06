package pkg07.pkg1.calculandomedia;

public class CalculandoMedia {

    public static void main(String[] args) {
        
       // O (+) serve para CONCATENAR 
        int N1 = 3;
        int N2 = 5;
        float media = (N1+N2)/2;
        System.out.println("A média é: " + media);

       
       //POS-DECREMENTO
        int numero = 10;
        int valor = 4 + numero --;// Aqui houve um pós-incremento na variavel numero, subtraindo só depois de concluir a operação de soma
        System.out.println("A soma vale: " + valor);
        System.out.println("O número pós-decremento agora vale: " + numero);

       
       //OPERADORES DE ATRIBUIÇÃO
        byte x = 4;//byte admite até o nº 127
        x+= 2;   //apresentando operadores de atribuição, até aqui: x vale 6
        x*= 2;   // agora x vale 12
        x-= 2;   // x=10
        x/= 2;   // x=5
        x%= 2;   //o resto de 5/2 é 1
        System.out.println("X, após os operadores de atribuição, agora vale: " + x);
       
       
        //ARREDONDAMENTOS
        float numb = 8.4f;
        int arredondamento = (int) Math.ceil(numb);   //tipos de arredondamento: abs, floor, ceil e round
        System.out.println("O arredondamento ceil de "  + numb + " é: " + arredondamento);
        
       
        // Como gerar NUMEROS ALEATÓRIOS:
        double aleatorio = Math.random();        //gera um número entre 0 e 1.
        int y = (int) (aleatorio * (50-15) + 15);   // nesse exemplo, gera valores entre 15 e 50
        System.out.println("O número aleatório inteiro gerado foi: " + y);
       
    }
    
}

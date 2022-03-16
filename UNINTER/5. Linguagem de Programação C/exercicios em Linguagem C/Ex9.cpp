#include <stdio.h>
#include <stdlib.h>

// Entrar com dez numeros(positivos ou negativos) e imprimir o maior e o menor numero da lista

main()
{
      int i, num;
      float num1, maior, menor;
      printf("Digite um numero: \n");
      scanf("%f", &num1);
      maior = num1;
      menor = num1;
      
      for(i=1; i<=9; i++)
      {
               printf("\nDigite um numero: ");
               scanf("%f", &num1);
               if (num1 > maior)
                  maior = num1;
               else
                   if (num1 < menor)
                      menor = num1;
      }
      printf("\nO maior numero digitado: %.2f\n\n", maior);
      printf("\nO menor numero digitado: %.2f\n\n", menor);
      system("pause");
}

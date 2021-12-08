#include <stdio.h>
#include <stdlib.h>

// Num campeonato de volleyball, se inscreveram 30 países. 
// Sabendo-se que na lista oficial de cada país consta, além de outros dados, peso e idade de 12 jogadores, 
// crie um programa que apresente as seguintes informações:
// - O peso médio e a idade média de cada um dos times;
// - O peso médio e a idade média de todos os participantes.


main()
{
      int i, x, id, somaid, totid;
      float peso, totpeso,somapeso;
      totpeso =0;
      totid = 0;
          
      for(i=1; i<=12; i++)
      {
              somapeso = 0;
              somaid = 0;
              
              for(x=1; x<=12; x++)
              {
                       printf("\nDigite peso: ");
                       scanf("%f", &peso);
                       printf("\nDigite idade: ");
                       scanf("%f", &id);
                       somapeso = somapeso + peso;
                       somaid = somaid + id;
              }
              
                       
             printf("\nO peso medio do time %.2f\n\n", somapeso/12);
             printf("\nIdade media do time %.2f\n\n", somaid/12);
             
             totpeso = totpeso + somaid;
      }
      printf("\nO peso medio do time %.2f\n\n", totpeso/360);
      printf("\nIdade media do time %.2f\n\n", totid/360);
      printf("\n");
     
      system("pause");
}

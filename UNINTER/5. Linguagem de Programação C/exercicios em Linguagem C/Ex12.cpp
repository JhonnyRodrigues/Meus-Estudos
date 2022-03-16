#include <stdio.h>
#include <stdlib.h>

main () 
{
     int i, c, vet[20], vet1[20], aux;
     for (i=0; i<=19; i++)
     {
         printf("\n Numero: ");
         scanf("%d", &vet[i]);
     }
     for (i=0; i<=18; i++)
     {
         for (c=i+1; c<=19; c++)
         {
             if(vet[i] > vet[c])
             {
                       aux = vet[i];
                       vet[i] = vet[c];
                       vet[c] = aux;
             }
         }
         printf("\n \n");
         printf("\n Relação dos numeros ordenados \n");
         for (i=0; i<=19; i++)
         {
              printf("\n%d", i+1, "-", vet[i]);
              vet1[0] = vet[0];
              c=1;
         }
         for (i=0; i<=19; i++)  
         {   
              if(vet[i] != vet1[c-1])
             {
                     vet1[c] = vet[i];
                     c++;
             }
         } 
          printf("\n \n \n");
          printf("\n Relação dos numeros nao repetidos \n");
          for (i=0; i<=c-1; i++)
              printf("\n%d", i+1, "-", vet1[i]);
          printf("\n");
          
}
          system("pause");
}

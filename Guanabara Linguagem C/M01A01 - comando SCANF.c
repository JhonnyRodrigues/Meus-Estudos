#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
    setlocale(LC_ALL,"Portuguese");
    int n;
    float m;
    printf("Digite um número inteiro: ");
    scanf("%i",&n); //atenção as aspas
    printf("Digite um número decimal: ");
    scanf("%f",&m);
    printf("Você acabou de digitar os números %d e %.3f. Obrigado!", n, m);//formatação do float com 3 casas decimais
return 0;
}


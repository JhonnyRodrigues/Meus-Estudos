#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
    setlocale(LC_ALL,"Portuguese");
    int n;
    float m;
    printf("Digite um n�mero inteiro: ");
    scanf("%i",&n); //aten��o as aspas
    printf("Digite um n�mero decimal: ");
    scanf("%f",&m);
    printf("Voc� acabou de digitar os n�meros %d e %.3f. Obrigado!", n, m);//formata��o do float com 3 casas decimais
return 0;
}


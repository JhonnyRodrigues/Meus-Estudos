#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
void main(){
    setlocale(LC_ALL, "Portuguese");

    char*Nome = "Jo�o";
    unsigned int Idade = 32;
    float Peso = 87.8;
    char*Sexo = 'M';

    printf("%s tem %u anos, %.1f Kg e seu sexo � %c",Nome, Idade, Peso, Sexo);
//return 0;
}

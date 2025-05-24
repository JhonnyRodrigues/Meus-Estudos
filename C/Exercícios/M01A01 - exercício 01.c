#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
int main(){
    setlocale(LC_ALL,"Portuguese"); //muda a zona de codificação de caracteres
    printf("<<< EX001 - Listagem >>>\n\n");
    printf("Listagem de Alunos\n");
    printf("Nome\t\tNota\n");
    printf("------------------\n");
    printf("Ana Beatriz\t8.5\n");
    printf("Bianca Martins\t9.0\n");
    printf("Cláudio Sá\t5.5\n");
    printf("Giovana Silva\t7.5\n");

    //return 0;
}

#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main() {
    setlocale(LC_ALL, "Portuguese"); //curiosamente não está funcionado para o gets

    char nome[30];
    char endereco[40];

    printf("Digite um nome: ");
    fflush(stdin);
    gets(nome);
    printf("Digite o endereço: ");
    fflush(stdin);
    gets(endereco);
    printf("o fulano \"%s\" que mora em \"%s\" foi registrado.", nome, endereco);
return 0;
}

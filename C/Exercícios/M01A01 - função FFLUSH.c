#include<stdio.h>
#include<stdlib.h>
#include<locale.h>

int main() {
    setlocale(LC_ALL, "Portuguese");

    char r;
    char s;

    printf("Digite s� uma letra: ");
    fflush(stdin); //fun��o para limpar o Buffer de caractere, sen�o d� pau no compilador
    scanf("%c", &r);
    printf("Digite outra letra: ");
    fflush(stdin);
    scanf("%c", &s);
    printf("Voc� digitou as letras \"%c\" e \"%c\"", r, s);
return 0;
}

/* al�m do scanf(), h� tbm o comando getchar (mais recomendado para ler caractere
    printf("Digite s� uma letra: ");
    fflush(stdin);
    r = getchar();
*/

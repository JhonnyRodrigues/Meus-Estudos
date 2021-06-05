#include<stdio.h>
#include<stdlib.h>
#include<locale.h>

int main() {
    setlocale(LC_ALL, "Portuguese");

    char r;
    char s;

    printf("Digite só uma letra: ");
    fflush(stdin); //função para limpar o Buffer de caractere, senão dá pau no compilador
    scanf("%c", &r);
    printf("Digite outra letra: ");
    fflush(stdin);
    scanf("%c", &s);
    printf("Você digitou as letras \"%c\" e \"%c\"", r, s);
return 0;
}

/* além do scanf(), há tbm o comando getchar (mais recomendado para ler caractere
    printf("Digite só uma letra: ");
    fflush(stdin);
    r = getchar();
*/

#include <stdio.h>
#include <locale.h> //essa biblioteca permite utilizar caracteres latinos (ç, ~,´, `, etc...)
void main () {
    setlocale(LC_ALL, "Portuguese");
    printf("C\té\t\"SUPER\"\tFácil!");
}

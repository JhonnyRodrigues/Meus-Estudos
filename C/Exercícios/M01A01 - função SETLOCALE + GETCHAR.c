#include <stdio.h>
#include <locale.h> //essa biblioteca permite utilizar caracteres latinos (�, ~,�, `, etc...)
void main () {
    setlocale(LC_ALL, "Portuguese");
    printf("C\t�\t\"SUPER\"\tF�cil!");
}

algoritmo "Procedimento_Par_ou_�mpar"

var
N: inteiro

Procedimento ParOuImpar (V: inteiro)
inicio
Se (V%2=0) entao
   EscrevaL ("O n�mero ", V, " � PAR")
senao
   EscrevaL ("O n�mero ", V, " � �MPAR")
FimSe
FimProcedimento

inicio
Escreva ("digite um n�mero: ")
Leia (N)     // � bom inventar um nome de vari�vel diferente do par�metro
ParOuImpar (N)
fimalgoritmo

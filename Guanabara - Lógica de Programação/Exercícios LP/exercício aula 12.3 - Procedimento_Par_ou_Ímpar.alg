algoritmo "Procedimento_Par_ou_Ímpar"

var
N: inteiro

Procedimento ParOuImpar (V: inteiro)
inicio
Se (V%2=0) entao
   EscrevaL ("O número ", V, " é PAR")
senao
   EscrevaL ("O número ", V, " é ÍMPAR")
FimSe
FimProcedimento

inicio
Escreva ("digite um número: ")
Leia (N)     // é bom inventar um nome de variável diferente do parâmetro
ParOuImpar (N)
fimalgoritmo

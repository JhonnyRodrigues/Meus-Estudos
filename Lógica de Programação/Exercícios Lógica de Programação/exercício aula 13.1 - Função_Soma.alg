algoritmo "Fun��o_Soma"
// Data : 10/06/2019
var
V1, V2, S: Inteiro

Funcao Soma (X, Y: Inteiro): Inteiro   //o retorno tbm ser� do tipo inteiro
inicio
Retorne X + Y
FimFuncao

inicio
Escreva ("Digite o primeiro valor: ")
Leia (V1)
Escreva ("Digite o segundo valor: ")
Leia (V2)
S <- Soma (V1, V2) //note que agora o retorno da fun��o(x+y) vai entrar na vari�vel(S)
EscrevaL ("A soma entre ", V1, " e ", V2, " � igual a ", S)
fimalgoritmo

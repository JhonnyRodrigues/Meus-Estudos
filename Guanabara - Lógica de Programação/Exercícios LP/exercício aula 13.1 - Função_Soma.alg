algoritmo "Função_Soma"
// Data : 10/06/2019
var
V1, V2, S: Inteiro

Funcao Soma (X, Y: Inteiro): Inteiro   //o retorno tbm será do tipo inteiro
inicio
Retorne X + Y
FimFuncao

inicio
Escreva ("Digite o primeiro valor: ")
Leia (V1)
Escreva ("Digite o segundo valor: ")
Leia (V2)
S <- Soma (V1, V2) //note que agora o retorno da função(x+y) vai entrar na variável(S)
EscrevaL ("A soma entre ", V1, " e ", V2, " é igual a ", S)
fimalgoritmo

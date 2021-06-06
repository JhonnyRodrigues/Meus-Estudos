algoritmo "Função Par_ou_Ímpar"
// Data : 10/06/2019

var
N: inteiro
R: caractere

Funcao ParOuImpar (V: inteiro): Caractere // note que V recebe o valor de N como
inicio                                    //inteiro e retorna como caractere
Se (V%2=0) entao
   Retorne "PAR"          // R assumirá esse valor como tipo caractere
Senao
   Retorne "IMPAR"
FimSE
FimFuncao

inicio
Escreva ("Digite um número: ")
Leia (N)
R <- ParOuImpar (N) // atribuir na função o valor (N)
Escreva ("O valor digitado é ",R)
fimalgoritmo

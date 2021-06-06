algoritmo "Função_Fatorial"
// Data : 10/06/2019
var
N, F: inteiro

Funcao Fatorial (V:inteiro):inteiro //V vai entrar e sair como tipo inteiro
Var Contador, Resultado: Inteiro    // criadas 2 variaveis de ESCOPO LOCAL
inicio
Resultado <- 1    // para não avacalhar na multiplicação
Para Contador <- 1 ate V faca   // até V - variável que dará valor à F
   Resultado <- Resultado * Contador     //fórmula de fatoração
FimPara
Retorne Resultado // para dentro de variável local V, ligada à variável global N
FimFuncao

inicio         // É AQUI QUE COMEÇA O PROGRAMA

Escreva ("Digite o número a fatorar: ")
Leia (N)
F <- Fatorial (N)  // F recebe a função chamada Fatorial, que calculará N
EscrevaL ("O valor de",N,"! é igual a",F)

fimalgoritmo

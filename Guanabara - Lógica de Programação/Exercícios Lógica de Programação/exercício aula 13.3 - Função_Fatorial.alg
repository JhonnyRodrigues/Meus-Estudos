algoritmo "Fun��o_Fatorial"
// Data : 10/06/2019
var
N, F: inteiro

Funcao Fatorial (V:inteiro):inteiro //V vai entrar e sair como tipo inteiro
Var Contador, Resultado: Inteiro    // criadas 2 variaveis de ESCOPO LOCAL
inicio
Resultado <- 1    // para n�o avacalhar na multiplica��o
Para Contador <- 1 ate V faca   // at� V - vari�vel que dar� valor � F
   Resultado <- Resultado * Contador     //f�rmula de fatora��o
FimPara
Retorne Resultado // para dentro de vari�vel local V, ligada � vari�vel global N
FimFuncao

inicio         // � AQUI QUE COME�A O PROGRAMA

Escreva ("Digite o n�mero a fatorar: ")
Leia (N)
F <- Fatorial (N)  // F recebe a fun��o chamada Fatorial, que calcular� N
EscrevaL ("O valor de",N,"! � igual a",F)

fimalgoritmo

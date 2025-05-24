algoritmo "Sequencia_Fibonacci_Parametro"

// Autor :   Guanabara
// Data : 10/06/2019

var
C, T1, T2, T3: Inteiro

Procedimento ProximoFibonacci (var A, B: Inteiro)   // var torna o parametro por referencia
var C: inteiro
Inicio
C <- A + B
Escreva (C)
A <- B  //se A recebe B, automaticamente, T1 recebe T2
B <- C  //idem
FimProcedimento

inicio
EscrevaL
T1 <- 0
Escreva (T1)
T2 <- 1
Escreva (T2)
Para C <- 3 ate 10 faca      // começa do 3 pq dois termos ja foram escritos
   ProximoFibonacci (T1, T2) //note que apenas chama o procedimento
FimPara
EscrevaL
fimalgoritmo

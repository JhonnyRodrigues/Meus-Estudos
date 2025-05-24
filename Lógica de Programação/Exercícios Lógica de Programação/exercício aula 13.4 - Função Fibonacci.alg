algoritmo "Função Fibonacci"
// Autor :   Guanabara
// Data : 10/06/2019
var
C, T1, T2, T3: Inteiro

Funcao ProximoFibonacci (var A, B: Inteiro): inteiro  // passagem de parâmetros por referência
var C: inteiro //declara uma variável que não existe no escopo global
Inicio
C <- A + B
A <- B          // O ideal é não escrever nada na função (comando Escreva)
B <- C             // e sim no corpo principal do programa
Retorne C
FimFuncao

inicio
T1 <- 0
Escreva (T1)
T2 <- 1
Escreva (T2)
Para C <- 3 ate 18 faca      // começa do 3 pq dois termos ja foram escritos
   T3 <- ProximoFibonacci (T1, T2)  //Note que agora foi criada uma variável (T3) para receber o retorno(C) da função
   Escreva (T3)
FimPara
fimalgoritmo

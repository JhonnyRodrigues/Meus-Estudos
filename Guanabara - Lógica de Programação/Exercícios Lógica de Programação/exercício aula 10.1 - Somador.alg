algoritmo "Somador"
// Função : Pede 5 valores e os soma
// Autor :  Guanabara
// Data : 08/05/2019

var
valor, Cont, Soma: Inteiro

inicio
Cont <- 1
Enquanto (Cont <= 5) faca
   Escreva ("Digite o ",Cont,"º valor ==> ")
   Leia (valor)
   Soma <- Soma + valor
   Cont <- Cont + 1
FimEnquanto
EscrevaL ("A soma de todos os valores digitados é ", Soma)
fimalgoritmo

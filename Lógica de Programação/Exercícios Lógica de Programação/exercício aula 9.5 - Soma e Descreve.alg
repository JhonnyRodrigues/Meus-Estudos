algoritmo "Soma e Descreve"
// Fun��o : Somador num�rico e descri��o do maior valor
// Autor : Jonatas
// Data : 03/05/2019
var
ORDINAL, NUMERO, LIMITE,SOMA, MAIORVALOR, MENORVALOR: INTEIRO
inicio
MAIORVALOR <- 0
MENORVALOR <- 0
ORDINAL <- 1
SOMA <- 0
Escreva ("Quantos n�meros deseja contar? ")
Leia (LIMITE)
Enquanto (ORDINAL <= LIMITE) faca
   Escreva ("Digite o ", ORDINAL, "� valor: ")
   Leia (NUMERO)
   Se (NUMERO > MAIORVALOR) Entao
      MAIORVALOR <- NUMERO
   FimSe
   ORDINAL <- ORDINAL + 1
   SOMA <- SOMA + NUMERO
FimEnquanto

EscrevaL ("A soma de todos os valores foi: ", SOMA)
EscrevaL ("O maior valor digitado foi: ", MAIORVALOR)
fimalgoritmo

algoritmo "Organizando n�meros"
// Fun��o :
// Autor :
// Data : 07/06/2019
// Se��o de Declara��es
var
cont, v, soma, divisiveis, nulos, pares, somapar: inteiro
media: real
inicio

cont <- 1
Para V <- 1 ate 5 faca
   Escreva ("Digite o ",cont ,"� valor: ")
   Leia (V)
   cont <- cont + 1

   soma <- soma + v
   media <- (soma / 5)
   Se (v <>0) e (v%5=0) entao
      divisiveis <- divisiveis + 1
   FimSe
   Se v=0 entao
      nulos <- nulos +1
   FimSe
   Se (v<>0) e (v%2=0) entao
      pares <- pares + 1
      somapar <- somapar + v
   FimSe
Fimpara

EscrevaL ("A soma dos valores � ", soma)
EscrevaL ("A m�dia entre os valores � ", media)
EscrevaL ("Valores divisiveis por cinco: ", divisiveis)
EscrevaL ("Valores nulos: ", nulos)
EscrevaL ("Total de n�meros pares n�o-nulos � ", pares)
EscrevaL ("A soma dos valores pares � ", somapar)

fimalgoritmo

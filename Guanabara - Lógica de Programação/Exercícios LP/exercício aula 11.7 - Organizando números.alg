algoritmo "Organizando números"
// Função :
// Autor :
// Data : 07/06/2019
// Seção de Declarações
var
cont, v, soma, divisiveis, nulos, pares, somapar: inteiro
media: real
inicio

cont <- 1
Para V <- 1 ate 5 faca
   Escreva ("Digite o ",cont ,"º valor: ")
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

EscrevaL ("A soma dos valores é ", soma)
EscrevaL ("A média entre os valores é ", media)
EscrevaL ("Valores divisiveis por cinco: ", divisiveis)
EscrevaL ("Valores nulos: ", nulos)
EscrevaL ("Total de números pares não-nulos é ", pares)
EscrevaL ("A soma dos valores pares é ", somapar)

fimalgoritmo

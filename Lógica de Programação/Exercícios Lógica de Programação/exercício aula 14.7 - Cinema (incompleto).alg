algoritmo "Cinema"
// Função :
// Autor :Guanabara
// Data : 24/06/2019
//escolher cadeira no cinema
var
Fila: vetor[1..5] de caractere    // de A até E
Fileira: Caractere
Posicao: vetor[1..10] de inteiro
ingressos, lugar, cont, acrescimo: inteiro

inicio
EscrevaL("Quantos ingressos deseja comprar?")
Leia (ingressos)
Escreva("Escolha a fileira:")
Leia(Fileira)
Se fileira = "A" entao
   fila[1] <- "A"
senao
   se fileira = "B" entao
      fila[2] <- "B"
   senao
      se fileira = "C" entao
         fila[3] <- "C"
      senao
         se fileira = "D" entao
            fila[4] <- "D"
         senao
            se fileira = "E" entao
               fila[5] <- "E"
            FimSe
         FimSe
      FimSe
   FimSe
FimSe
Para cont <- 1 ate 10 faca
   acrescimo <- acrescimo + 1
   posicao[cont] <- acrescimo
   Escreva("[",posicao[cont],"]")
FimPara
Escreva("Escolha a posição:",Fileira)
Leia (posicao[])
fimalgoritmo

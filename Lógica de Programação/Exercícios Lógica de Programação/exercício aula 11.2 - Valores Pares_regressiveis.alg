algoritmo "Valores Pares_regressiveis"
// Fun��o :
// Autor :
// Data : 13/05/2019
// Se��o de Declara��es 
var
     Cont, V: Inteiro
inicio
      Escreva ("Digite um valor: ")
      Leia (V)
      Se (V % 2 = 1) entao
         V <- V - 1       // tirando 1 do valor escolhido caso o numero seja �mpar
      FimSe
      Para Cont <- V ate 0 passo -2   Faca    // escolhendo o passo
           EscrevaL (cont)
      FimPara
fimalgoritmo

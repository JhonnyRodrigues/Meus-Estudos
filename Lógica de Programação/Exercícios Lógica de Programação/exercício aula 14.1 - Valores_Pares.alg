algoritmo "Valores_Pares"
// Função : Entender variáveis compostas unidimensionais/vetores
// Autor :  Guanabara
// Data : 11/06/2019

var
   Val: vetor[1..7] de Inteiro
   i, TotPar: Inteiro	//i = índice
inicio
      TotPar <- 0
      Para i <- 1 ate 7 faca    // varíavel composta (i)
      Escreva ("Digite o ", i, "º valor: ")
      Leia (val[i])        //leia na posição [i]
      FimPara

      Para i <- 1 ate 7 faca
           Se (val[i] % 2 = 0) entao
           TotPar <- TotPar + 1
           EscrevaL("Valor PAR encontrado na posição ", i)
           FimSe
      FimPara
      EscrevaL("O total de pares foi ", TotPar)
fimalgoritmo

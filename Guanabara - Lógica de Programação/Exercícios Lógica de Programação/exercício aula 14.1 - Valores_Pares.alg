algoritmo "Valores_Pares"
// Fun��o : Entender vari�veis compostas unidimensionais/vetores
// Autor :  Guanabara
// Data : 11/06/2019

var
   Val: vetor[1..7] de Inteiro
   i, TotPar: Inteiro	//i = �ndice
inicio
      TotPar <- 0
      Para i <- 1 ate 7 faca    // var�avel composta (i)
      Escreva ("Digite o ", i, "� valor: ")
      Leia (val[i])        //leia na posi��o [i]
      FimPara

      Para i <- 1 ate 7 faca
           Se (val[i] % 2 = 0) entao
           TotPar <- TotPar + 1
           EscrevaL("Valor PAR encontrado na posi��o ", i)
           FimSe
      FimPara
      EscrevaL("O total de pares foi ", TotPar)
fimalgoritmo

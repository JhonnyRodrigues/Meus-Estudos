algoritmo "Valores de 0 a 10 com soma �mpares"
// Fun��o : Pede 6 valores, determina os de 0 a 10 e soma os �mpares
// Autor :
// Data : 13/05/2019
// Se��o de Declara��es 
var
     C, V, Tot0a10, SImp: Inteiro

inicio
      Para C <- 1 ate 6 faca
           EscrevaL ("Digite um valor: ")
           Leia (V)
           Se (v <=10) e (v >=0) entao
              Tot0a10 <- Tot0a10 +1
                     Se (V%2=1) entao
                     SImp <- SImp + V //como trata-se de uma soma o SImp
                     Fimse           // n�o � somado ao +1 como no tot010
           FimSe
      FimPara
      EscrevaL ("O TOTAL de n�meros encontrados entre 0 e 10 s�o ", TOT0a10)
      EscrevaL (" e a SOMA dos n�meros �mpares < 10 � ",Simp)
fimalgoritmo

algoritmo "Procedimento_que_soma"

var
   X, Y: inteiro
   
Procedimento Soma (A, B: inteiro)
Inicio
      EscrevaL ("Recebi o valor ", A)
      EscrevaL ("Recebi o valor ", B)
      EscrevaL ("A soma entre os dois � ", A + B)
FimProcedimento

inicio        //corpo principal do programa
X <- 5
Y <- 3
Soma (X, Y)   //passagem de refer�ncia por valor
fimalgoritmo

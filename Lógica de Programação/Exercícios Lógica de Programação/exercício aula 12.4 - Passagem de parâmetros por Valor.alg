algoritmo "Passagem de par�metros por Valor"   // *leia nota abaixo

var
   X, Y: inteiro    // variaveis globais
   
Procedimento Soma ( A, B: inteiro)  // Note que nao cont�m a palavra 'var'
inicio                             // portanto, n�o � uma REFER�NCIA
      A <- A + 1                   // sendo assim, A e B recebem
      B <- B + 2                   // os VALORES de X e Y
      EscrevaL ("Valor de A = ", A)
      EscrevaL ("Valor de B = ", B)
      EscrevaL ("Soma A + B = ", A+B)
FimProcedimento

inicio
      X <- 4
      Y <- 8                    // X e y S�o vari�veis de ESCOPO global
      Soma (X, Y)               // diferente de A e B que s�o local
      EscrevaL ("Valor de X = ", X)
      EscrevaL ("Valor de Y = ", Y)  // PERCEBA QUE X:4, Y:8, A: 5 e B:10
fimalgoritmo

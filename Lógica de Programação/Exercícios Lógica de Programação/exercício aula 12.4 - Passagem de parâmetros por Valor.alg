algoritmo "Passagem de parâmetros por Valor"   // *leia nota abaixo

var
   X, Y: inteiro    // variaveis globais
   
Procedimento Soma ( A, B: inteiro)  // Note que nao contêm a palavra 'var'
inicio                             // portanto, não é uma REFERÊNCIA
      A <- A + 1                   // sendo assim, A e B recebem
      B <- B + 2                   // os VALORES de X e Y
      EscrevaL ("Valor de A = ", A)
      EscrevaL ("Valor de B = ", B)
      EscrevaL ("Soma A + B = ", A+B)
FimProcedimento

inicio
      X <- 4
      Y <- 8                    // X e y São variáveis de ESCOPO global
      Soma (X, Y)               // diferente de A e B que são local
      EscrevaL ("Valor de X = ", X)
      EscrevaL ("Valor de Y = ", Y)  // PERCEBA QUE X:4, Y:8, A: 5 e B:10
fimalgoritmo

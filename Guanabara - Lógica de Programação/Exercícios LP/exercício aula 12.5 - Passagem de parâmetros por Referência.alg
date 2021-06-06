algoritmo "Soma Parâmetros por Referência"

var
   X, Y: inteiro
   
Procedimento Soma (var A, B: inteiro) // Atenção para a palavra VAR, agora A e B
inicio                                 //não são mais valores e sim referências!
      A <- A + 1                       //e isso faz toda a diferença
      B <- B + 2                       //no resultado final
      EscrevaL ("Valor de A = ", A)
      EscrevaL ("Valor de B = ", B)
      EscrevaL ("Soma A + B = ", A+B)
FimProcedimento

inicio
      X <- 4
      Y <- 8
      Soma (X, Y)  //chamando o procedimento, os valores de X e Y serao
      EscrevaL ("Valor de X = ", X)     // copiados para dentro de A e B
      EscrevaL ("Valor de Y = ", Y)     // e no fim do procedimento, como
      // existe uma referência ('var'), ela vai fazer com que o valor do
      // parametro A passe para X e o valor de B passe para Y
      // LOGO, X VAI VALER 5 E Y VAI VALER 10
fimalgoritmo

algoritmo "Taboada "
// Função : consultar taboada de número determinado pelo usuário
// Autor : Guanabara
// Data : 08/05/2019
var
cont, Numero, Resultado: inteiro
inicio
cont <- 1
Escreva ("Quer ver a taboada de qual número? ")
Leia (Numero)
Repita
   Resultado <- Numero * Cont
   EscrevaL (Numero, " x ", cont, " = ", Resultado)
   Cont <- Cont +1
Ate (Cont > 10)
fimalgoritmo

algoritmo "Taboada "
// Fun��o : consultar taboada de n�mero determinado pelo usu�rio
// Autor : Guanabara
// Data : 08/05/2019
var
cont, Numero, Resultado: inteiro
inicio
cont <- 1
Escreva ("Quer ver a taboada de qual n�mero? ")
Leia (Numero)
Repita
   Resultado <- Numero * Cont
   EscrevaL (Numero, " x ", cont, " = ", Resultado)
   Cont <- Cont +1
Ate (Cont > 10)
fimalgoritmo

algoritmo "Sequencia Fibonaci com comando PARA"
// Fun��o : Formar famosa sequ�ncia com 15 n�meros da soma dos dois termos anteriores
// Autor :   Jonatas
// Data : 06/06/2019
// foi dificil mas consegui   \o/
var
cont, c1, c2, c3: inteiro
inicio
// c1 <- 0     por ser valor nulo ela pode n�o ser declarada
c2 <- 1
EscrevaL
Escreva (c1,",",c2,",") // Esta linha tem fun��o de CABE�ALHO
Para Cont <- 1 ate 13 faca // Por que at� 13? por causa dos 2 termos j� inclusos no cabe�alho
   c3 <- c2 + c1
   Escreva (c3,",")
   c1 <- c2     // essa vari�vel C1 � criada para guardar na "mem�ria" a vari�vel C2 que, por sua vez, passar� a assumir outro valor, C3.
   c2 <- c3
FimPara
EscrevaL
fimalgoritmo

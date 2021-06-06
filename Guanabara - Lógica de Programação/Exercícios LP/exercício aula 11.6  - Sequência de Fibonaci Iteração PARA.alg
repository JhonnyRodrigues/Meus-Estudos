algoritmo "Sequencia Fibonaci com comando PARA"
// Função : Formar famosa sequência com 15 números da soma dos dois termos anteriores
// Autor :   Jonatas
// Data : 06/06/2019
// foi dificil mas consegui   \o/
var
cont, c1, c2, c3: inteiro
inicio
// c1 <- 0     por ser valor nulo ela pode não ser declarada
c2 <- 1
EscrevaL
Escreva (c1,",",c2,",") // Esta linha tem função de CABEÇALHO
Para Cont <- 1 ate 13 faca // Por que até 13? por causa dos 2 termos já inclusos no cabeçalho
   c3 <- c2 + c1
   Escreva (c3,",")
   c1 <- c2     // essa variável C1 é criada para guardar na "memória" a variável C2 que, por sua vez, passará a assumir outro valor, C3.
   c2 <- c3
FimPara
EscrevaL
fimalgoritmo

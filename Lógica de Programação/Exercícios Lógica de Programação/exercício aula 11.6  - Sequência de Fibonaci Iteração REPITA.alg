algoritmo "Sequ�ncia de Fibonaci"
// Fun��o : Exibir essa famosa sequ�ncia
// Autor :
// Data : 13/05/2019
// o 3� valor �  soma dos dois antecessores
var

lim, c1, c2:inteiro
//lim -> var para contar elementos
//c1 -> var que guarda elemento atual
//c2 -> var que guarda elemento anterior

inicio // 0,1,1,2,3,5,8,12,20,32,52....

EscrevaL ("                             Sequ�ncia de Fibonaci")
EscrevaL (" ---------------------------------------------------------------------------")

c1 := 1
c2 := 1
Escreva ("0, ",c1, ", ",c1,", ") //apresenta os n�meros iniciais
Repita
   lim <- lim + 1
   c1 <- c2 + c1
   c2:= c1 + c2
   Escreva (c1, ", ", c2, ",")
Ate  lim > 6
EscrevaL
fimalgoritmo

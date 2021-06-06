algoritmo "Fatorial Simples"
// Função : Fatorar e perguntar se quer continuar
// Autor :Guanabara
// Data : 08/05/2019
// Seção de Declarações
var
C, Numero, F: Inteiro
Resposta: caractere
inicio
Repita
   Escreva ("Digite um número: ")
   Leia (Numero)
   C <- Numero
   F <- 1       // pq se F fosse 0, "todo numero * 0 = 0"
     Repita
      F <- F * C
      C <- C -1
      Ate (C <1)
   EscrevaL ("O valor do fatorial de",Numero," é igual a ",F)
   Escreva  ("Deseja continuar? [S/N] ")
   Leia (Resposta)
   LimpaTela
Ate ( Resposta = "N")
fimalgoritmo

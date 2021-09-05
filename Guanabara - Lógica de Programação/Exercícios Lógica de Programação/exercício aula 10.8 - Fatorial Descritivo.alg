algoritmo "Fatorial Descritivo"
// usando os comandos REPITA e ENQUANTO, todos dentro da mesma cadeia para calcular o fatorial
var
Contador, Numero, F: Inteiro
Resposta: caractere
inicio
repita             //escolhe encerrar ou não o programa
   Escreva ("Digite um número: ")
   Leia (Numero)
   Contador <- Numero
   F <- 1           // começa com 1 pois x0 é sempre 0!
   Repita           // limita até onde o multiplicador decresce
      F <- F * Contador
      Contador <- Contador -1
      Enquanto contador > 0 faca  // loop para escrever na tela
         Escreva (" x",Contador)
         F <- F * Contador
         Contador <- Contador -1
      FimEnquanto   // comando ENQUANTO apenas paras ilustrar
   Ate (contador = 0)

   EscrevaL
   EscrevaL ("O valor do fatorial de",Numero, " é igual a", F)
   Escreva ("Quer continuar? [S/N] ")
   Leia (Resposta)
   LimpaTela
ate (Resposta = "N")
fimalgoritmo

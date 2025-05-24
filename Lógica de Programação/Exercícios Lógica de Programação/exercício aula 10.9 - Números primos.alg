algoritmo "NumeroPrimo"
// Função : Identificar se o número é primo
//(quando não há mais do que 2 números divisíveis)
// Autor :Guanabara
// Data : 10/05/2019

var
Contador, Numero, Cont_Divisivel: Inteiro
resposta: caractere
inicio
Repita
   Contador <- 1
   Cont_Divisivel <- 0 //não só declarar, é preciso zerá-lo caso nova operação
   Escreva ("Digite um número: ")
   Leia (Numero)
   Repita
      Escreva (contador)
      Se (Numero % Contador = 0) entao
         Cont_Divisivel <- Cont_Divisivel +1
      FimSe
      Contador <- Contador +1
   Ate (contador > Numero)
   Se (Cont_Divisivel = 2) entao       // é o que define se um é número primo!
      EscrevaL
      EscrevaL ("Ao todo existem ", Cont_Divisivel, " valores divisiveis.")
      EscrevaL ("Portanto o número É PRIMO!")
   Senao
      EscrevaL
      EscrevaL ("Ao todo existem ", Cont_Divisivel, " valores divisiveis.")
      EscrevaL ("Portanto o número NÃO é primo")
   FimSe
   Escreva ("Deseja continuar? [S/N] ")
   Leia (resposta)
Ate (resposta = "N")
fimalgoritmo

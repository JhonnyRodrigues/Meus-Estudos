algoritmo "NumeroPrimo"
// Fun��o : Identificar se o n�mero � primo
//(quando n�o h� mais do que 2 n�meros divis�veis)
// Autor :Guanabara
// Data : 10/05/2019

var
Contador, Numero, Cont_Divisivel: Inteiro
resposta: caractere
inicio
Repita
   Contador <- 1
   Cont_Divisivel <- 0 //n�o s� declarar, � preciso zer�-lo caso nova opera��o
   Escreva ("Digite um n�mero: ")
   Leia (Numero)
   Repita
      Escreva (contador)
      Se (Numero % Contador = 0) entao
         Cont_Divisivel <- Cont_Divisivel +1
      FimSe
      Contador <- Contador +1
   Ate (contador > Numero)
   Se (Cont_Divisivel = 2) entao       // � o que define se um � n�mero primo!
      EscrevaL
      EscrevaL ("Ao todo existem ", Cont_Divisivel, " valores divisiveis.")
      EscrevaL ("Portanto o n�mero � PRIMO!")
   Senao
      EscrevaL
      EscrevaL ("Ao todo existem ", Cont_Divisivel, " valores divisiveis.")
      EscrevaL ("Portanto o n�mero N�O � primo")
   FimSe
   Escreva ("Deseja continuar? [S/N] ")
   Leia (resposta)
Ate (resposta = "N")
fimalgoritmo

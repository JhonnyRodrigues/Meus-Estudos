algoritmo "Conta_negativos "
// Função : Pede valores, depois conta quantos negativos foram inseridos
// Autor : Guanabara
// Data : 08/05/2019
var
Numero, Contador, TotalNegativos, Inseridos: inteiro
inicio
Contador <- 1
Escreva ("Quantos valores deseja inserir? ")
Leia (Inseridos)
Repita
   Escreva ("Digite um número: ")
   Leia (Numero)
   Se Numero < 0 entao
      TotalNegativos <- TotalNegativos +1
   Fimse
   Contador <- Contador +1
Ate Contador > Inseridos
EscrevaL ("Foram digitados ", TotalNegativos, " valores negativos.")
fimalgoritmo

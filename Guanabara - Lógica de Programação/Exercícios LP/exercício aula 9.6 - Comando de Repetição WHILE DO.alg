algoritmo "Somador_Descrição"
// Função : Somador numérico e descrição do maior e menor valor
// Autor : Jonatas
// Data : 03/05/2019
var
   contador, VALOR, QUANTOS, SOMA, MAIORVALOR, MENORVALOR: INTEIRO
inicio
      contador <- 1
      SOMA <- 0
      MENORVALOR <- 99999999
      Escreva ("Quantos números deseja contar? ")
      Leia (QUANTOS)
      Enquanto (contador <= QUANTOS) faca
               Escreva ("Digite o ", contador, "º valor: ")
               Leia (VALOR)
                    Se (VALOR > MAIORVALOR) Entao     //"se NUMERO for maior do que o maior numero que esta guardado entao o meu maior valor passa a ser o NUMERO atual"
                    MAIORVALOR <- VALOR
                    FimSe
                    Se (MENORVALOR > VALOR ) ENTAO
                    MENORVALOR <- VALOR
                    FimSe
               contador <- contador + 1
               SOMA <- SOMA + VALOR
               	
      FimEnquanto
      EscrevaL ("A soma de todos os valores foi: ", SOMA)
      EscrevaL ("O maior valor digitado foi: ", MAIORVALOR)
      EscrevaL ("O menor valor digitado foi: ", MENORVALOR)
fimalgoritmo

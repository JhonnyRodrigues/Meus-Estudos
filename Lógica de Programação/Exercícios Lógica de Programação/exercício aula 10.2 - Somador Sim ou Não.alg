algoritmo "Somador S/N"
// Fun��o : Soma os valores enquanto a resposta for SIM
// Autor : Guanabara
// Data : 08/05/2019
var
   Numero, Soma: Inteiro
   resp: caractere
inicio
      resp <- "S"
      Enquanto resp = "s" faca
               Escreva ("Digite o valor ==> ")
               Leia (Numero)
               Soma <- Soma + Numero
               Escreva ("Voc� quer continuar? [S/N] ")
               Leia (resp)
      FimEnquanto
      EscrevaL ("A soma de todos os valores digitados � ", Soma)
fimalgoritmo

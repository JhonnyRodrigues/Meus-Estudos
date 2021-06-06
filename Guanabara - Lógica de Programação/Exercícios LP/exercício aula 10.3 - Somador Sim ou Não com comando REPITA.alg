algoritmo "Somador Sim ou Não com comando REPITA"
// Função : Somar com pergunta de sim ou não
// Autor : Guanabara
// Data : 08/05/2019
var
   N, S: Inteiro
   resp: caractere
inicio
      Repita
            Escreva ("Digite o valor ==> ")
            Leia (N)
            S <- S + N
            Escreva ("Você quer continuar? [S/N] ")
            Leia (resp)
      Ate (resp = "N")
      EscrevaL ("A soma de todos os valores digitados é ", S)
fimalgoritmo

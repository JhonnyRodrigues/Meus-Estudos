algoritmo "Somador Sim ou N�o com comando REPITA"
// Fun��o : Somar com pergunta de sim ou n�o
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
            Escreva ("Voc� quer continuar? [S/N] ")
            Leia (resp)
      Ate (resp = "N")
      EscrevaL ("A soma de todos os valores digitados � ", S)
fimalgoritmo

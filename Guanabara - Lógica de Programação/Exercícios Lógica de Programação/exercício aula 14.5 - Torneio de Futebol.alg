algoritmo "Tabela_de_futebol
// Fun��o : montar tabela com times enfrentando entre si
// Autor : Guanabara
// Data : 13/06/2019
// O intuito � Treinar Vari�vel composta homogenea unidimensional
var
time: vetor[1..20] de caractere
i, j, lim: Inteiro     //posi��es
inicio

EscrevaL("------------------")
EscrevaL("CAMPEONATO FUTEBOL")
EscrevaL("------------------")
EscrevaL("Quantos times deseja inserir? ")
Leia (lim)

i <- 1
j <- 1

Para i <- 1 ate lim faca                   // inserindo os times
   EscrevaL("Nome do", i,"� time: ")
   Leia (time[i])
FimPara


Escreval ("")
EscrevaL("------------------")
EscrevaL("TABELA DE PARTIDAS")
EscrevaL("------------------")

Para i <- 1 ate lim faca
   Para j <- 1 ate lim faca
      Se j <> i entao      //!!!!!!!!!!!!!!! t�o simples poh!   '-'  SE TIME FOR IGUAL A ELE MESMO, N�O ESCREVE NA TELA
      EscrevaL(time[i]:10,"[ ] X [ ]",time[j])
      FimSe
   FimPara
FimPara
fimalgoritmo

algoritmo "Tabela_de_futebol
// Função : montar tabela com times enfrentando entre si
// Autor : Guanabara
// Data : 13/06/2019
// O intuito é Treinar Variável composta homogenea unidimensional
var
time: vetor[1..20] de caractere
i, j, lim: Inteiro     //posições
inicio

EscrevaL("------------------")
EscrevaL("CAMPEONATO FUTEBOL")
EscrevaL("------------------")
EscrevaL("Quantos times deseja inserir? ")
Leia (lim)

i <- 1
j <- 1

Para i <- 1 ate lim faca                   // inserindo os times
   EscrevaL("Nome do", i,"º time: ")
   Leia (time[i])
FimPara


Escreval ("")
EscrevaL("------------------")
EscrevaL("TABELA DE PARTIDAS")
EscrevaL("------------------")

Para i <- 1 ate lim faca
   Para j <- 1 ate lim faca
      Se j <> i entao      //!!!!!!!!!!!!!!! tão simples poh!   '-'  SE TIME FOR IGUAL A ELE MESMO, NÃO ESCREVE NA TELA
      EscrevaL(time[i]:10,"[ ] X [ ]",time[j])
      FimSe
   FimPara
FimPara
fimalgoritmo

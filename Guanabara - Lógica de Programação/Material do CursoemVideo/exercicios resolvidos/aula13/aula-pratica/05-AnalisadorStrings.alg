algoritmo "AnalisadorStrings"
// =============================================================
// Algoritmo para demonstrar as principais funcoes de manipulacao
// de strings do visualg.
//
// AUTOR: Gustavo Guanabara
// // Data : 10/06/2019
// =============================================================
var
N: Caractere
C: Inteiro
inicio
Escreva("Digite seu nome: ")
Leia(N)
EscrevaL("Total de letras do seu nome: ", Compr(N))
EscrevaL("Seu nome em maiusculas e ", Maiusc(N)) // põe todas as letras em maiúsculas
EscrevaL("Seu nome em minusculas e ", Minusc(N))
EscrevaL("A primeira letra do seu nome e ", Copia(Maiusc(N), 1, 1))
EscrevaL("A ultima letra do seu nome e ", Copia(Maiusc(N), Compr(N), 1))
EscrevaL ("As letras centrais do seu nome são ", Copia(N,6,2))// o 1º parâmetro é: a string da variavel nome
// o 2º parâmetro é: a partir de quando começa a contar
// e o 3º é: quantas casas/ou letras serão mostradas. Exemplo: String 'CursoEmVideo', mostrando 'Em'
EscrevaL ("A posição da palavra Video é ",pos("video",N))
EscrevaL("Seu nome tem a letra O na posicao ", Pos("O", Maiusc(N)))
EscrevaL("O codigo da letra A e ", Asc("A"))
EscrevaL("A letra de codigo 66 e ", Carac(66))
Escreva("O nome ",N," ao contrário é ")
Para C <- Compr(N) ate 1 passo -1 faca
   Escreva(Copia(Maiusc(N),C,1))
FimPara
fimalgoritmo

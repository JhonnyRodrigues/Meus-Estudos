algoritmo "valoresMatriz"
// =============================================================
// Algoritmo para ler uma matriz de quarta ordem e mostrar no final:
// - A soma dos valores da diagonal principal
// - O produto dos valores da segunda linha
// - O maior valor da terceira coluna
// - A média dos valores de toda a matriz
// - A soma dos valores da quarta linha que ultrapassam a média
// - Quais valores da 4ª linha ultrapassam a média
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
m: vetor[1..4, 1..4] de Inteiro
L, c, sDP, p2L, mai3C,somatoria, v4L: Inteiro
mvtm: Real  //a criação dessa variável é opcional

inicio
sDP <- 0
p2L <- 1
Para L <- 1 ate 4 faca
   Para c <- 1 ate 4 faca
      Escreva("Digite o valor da Posicao [", L, ",", c, "]: ")
      Leia(m[L,c])
      somatoria <- somatoria + m[L,c]
      Se (L = c) entao
         sDP <- sDP + m[L,c]   //soma a diagonal
      FimSe
   FimPara
FimPara

mvtm <- somatoria / 16
Para L <- 1 ate 4 faca
   Para c <- 1 ate 4 faca
      Escolha L
      Caso 1,2,3   //escre a matriz normal para essas linhas
         Escreva(m[L,c]:4)
      Caso 4       //na 4ª linha, analiza condição
         Se (m[L,c] > mvtm) entao
            Escreva("{",m[L,c]:4,"}")
         Senao
            Escreva(m[L,c]:4)
         FimSe
      FimEscolha
   FimPara
   EscrevaL()
FimPara

Para c <- 1 ate 4 faca  //´C´ significa coluna
   p2L <- p2L * m[2,c]  // produto dos valores da 2ª coluna
FimPara

Para l <- 1 ate 4 faca
   Se (m[L,3] > mai3C) entao  //maior valor da coluna 3
      mai3C <- m[l,3]
   FimSe
FimPara

Para c de 1 ate 4 faca
   Se (m[4,c] > mvtm) entao //se valor for maior que a media
      v4L <- v4L + m[4,c]
   Fimse
FimPara

EscrevaL("A soma dos valores da Diagonal Principal e ", sDP)
EscrevaL("O produto dos valores da Segunda Linha e ", p2L)
EscrevaL("O maior valor da Terceira Coluna e ", mai3C)
EscrevaL("A média dos valores de toda a matriz é ",mvtm)
EscrevaL("A soma dos valores da quarta linha que ultrapassam a média é ",v4L)
fimalgoritmo

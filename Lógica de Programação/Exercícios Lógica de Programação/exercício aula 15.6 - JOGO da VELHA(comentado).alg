algoritmo "jogoVelha"
// =============================================================
// Algoritmo para criar um jogo da velha.
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
  v: vetor[1..3, 1..3] de Caractere
  L, C, Cont, Po: Inteiro
  Simb : Caractere
  R: Logico
  
Procedimento mostraVelha()
Inicio
   EscrevaL("+---+---+---+")
   Para L <- 1 ate 3 faca
      Para C <- 1 ate 3 faca
         Escreva("|  ", v[L,C]:1)
      FimPara
      Escreva("|")
      EscrevaL()
      EscrevaL("+---+---+---+")
   FimPara
FimProcedimento

Procedimento mudaJogador()
inicio
   Se (Simb = "X") entao
      Simb <- "O"
   senao
      Simb <- "X"
   FimSe
FimProcedimento

Funcao Jogar(S: Caractere; P: Inteiro): Logico    //S:simbolo, P:posi��o
Var mudou: logico
inicio
   mudou <- falso
   Para L <- 1 ate 3 faca   //linha
      Para C <- 1 ate 3 faca  //coluna
         Se(v[L,C] = NumpCarac(P)) entao   //converte P(int) para tipo caractere, s� assim a matriz, do tipo caractere, pode receb�-lo
            v[L,C] <- S    //s�mbolo
            mudou <- verdadeiro
         FimSe
      FimPara
   FimPara
   Retorne mudou  //ou seja, retorne verdadeiro
FimFuncao

Funcao TerminouVelha(): Logico  //Essa fun��o declara as 4 regras do jogo
Var
  terminou: Logico    //Essa vari�vel LOCAL j� nasce com valor FALSO
  ocorr: Inteiro
inicio
   terminou <- falso
   // Jogos em linha
   Para L <- 1 ate 3 faca
      Se (v[L,1] = v[L,2]) e (v[L,2] = v[L,3]) entao
         terminou <- verdadeiro //Se o programa chegar nessa linha, ele ir� ACABAR, pq j� achou um vencedor
      FimSe
   FimPara
   // Jogos em coluna
   Para C <- 1 ate 3 faca
      Se (v[1,C] = v[2,C]) e (v[2,C] = v[3,C]) entao
         terminou <- verdadeiro //Se o programa chegar nessa linha, ele ir� ACABAR, pq j� achou um vencedor
      FimSe
   FimPara
   // Jogos em diagonal
   Se (v[1,1] = v[2,2]) e (v[2,2] = v[3,3]) entao
      terminou <- verdadeiro //Se o programa chegar nessa linha, ele ir� ACABAR, pq j� achou um vencedor
   FimSe
   Se (v[1,3] = v[2,2]) e (v[2,2] = v[3,1]) entao
      terminou <- verdadeiro //Se o programa chegar nessa linha, ele ir� ACABAR, pq j� achou um vencedor
   FimSe
   
   // Jogos em VELHA
   ocorr <- 0    //ocorr�ncia: precisa continuar zerado para o jogo acabar (sem Vencedor)
   Para L <- 1 ate 3 faca    //vai varrer toda a matriz
      Para C <- 1 ate 3 faca
         Se (v[L,C] <> "X") e (v[L,C] <> "O") entao  //Verifica se foi digitado apenas X ou Bolinha
            ocorr <- ocorr + 1    //vai incrementar uma ocorr�ncia
         FimSe
      FimPara
   FimPara     //a vari�vel `terminou` at� aqui est� como FALSA
   Se (ocorr = 0) entao  //o jogo s� acaba se n�o existir nenhuma ocorr�ncia
      terminou <- verdadeiro //Se o programa chegar nessa linha, ele ir� ACABAR, DEU VELHA
   FimSe
   
   // Retorna se o jogo acabou ou nao
   Retorne terminou
FimFuncao

inicio
   Cont <- 1           //come�a numerando com "1" a 1� posi��o do jogo
   Simb <- "X"
   Para L <- 1 ate 3 faca                         //linha
      Para C <- 1 ate 3 faca                     //coluna
         v[L,C] <- NumpCarac(Cont)  //converte para caractere o `cont`, para a matriz poder aceitar seu valor
         Cont <- Cont + 1    //de 1 pra 2...   esses n�meros v�o pra dentro da matriz, que sera exibida posteriormente
      FimPara               //terminado de preencher a matriz com 9 valores consecutivos, vamos exibi-la
   FimPara
   MostraVelha()  //procedimento para exibir a matriz
   Repita    //esse Repita impede que o programa encerre enquanto a fun��o`terminouVelha()` n�o retornar VERDADEIRO
      Repita  //esse Repita insiste que a fun��o `Jogar()`retorne VERDADEIRO
         EscrevaL("Vai jogar [", simb:1, "] em qual posicao? ")
         Leia(Po)
         R <- Jogar(Simb, Po))  //fun��o enviando par�metros: s�mbolo, posi��o
         Se (R = falso) entao
            EscrevaL("JOGADA INVALIDA!")
         FimSe
      Ate (R = verdadeiro)
      MudaJogador()  //chama procedimento l� da linha 27
      LimpaTela
      MostraVelha()
   Ate (terminouVelha() = verdadeiro) //Aqui ficam as regras, as condi��es
   EscrevaL("JOGO FINALIZADO!!!")
fimalgoritmo

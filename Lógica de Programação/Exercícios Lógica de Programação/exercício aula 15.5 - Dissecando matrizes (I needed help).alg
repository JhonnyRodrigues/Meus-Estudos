algoritmo "Dissecando Matrizes"
// Fun��o : Cria um Menu com diferentes op��es de exibi��o de uma matriz 4x4
// Autor :
// Data : 01/05/2021
// Se��o de Declara��es
var
matriz:vetor [1..4,1..4] de inteiro   //2 dimens�es
L, c, opcao:inteiro

procedimento menu()   //Ainn! Procedimento sem par�metro, por qu�??"
inicio                //Porque n�o ser� preciso "copiar" para dentro dele
// qualquer valor de var�vel pois n�o existem opera��es matem�ticas aqui dentro
EscrevaL
EscrevaL("MENU DE OP��ES")
EscrevaL("======================")    //n�o � recomend�vel comandos
EscrevaL("[1] Mostrar a Matriz")      //de imput/output em sub-programas
EscrevaL("[2] Diagonal Principal")    //embora eu tenha feito aqui...
EscrevaL("[3] Tri�ngulo Superior")
EscrevaL("[4] Tri�ngulo inferior")
EscrevaL("[5] Sair")
EscrevaL
Repita
   Escreva("     OP��O: ")
   Leia (opcao)
   Se (opcao >5) ou (opcao <1) entao  //exibe mensagem se op��o n�o existir
      EscrevaL("Esta op��o n�o � v�lida!")
   FimSe
   EscrevaL
Ate (opcao >0) e (opcao <6)
LimpaTela
fimprocedimento

inicio

Para L de 1 ate 4 faca    //preenche os vetores
   Para c de 1 ate 4 faca
      Escreva("Digite o valor da linha",L," e coluna",c,": ")
      Leia (matriz[L,c])
   FimPara
FimPara
Limpatela

Repita    //nesse repita, o programa s� encerra com a op��o 5
   menu() //chama procedimento
   Escolha opcao

   Caso 1     //F�rmula Mostrar a Matriz
      Para L de 1 ate 4 faca
         Para c de 1 ate 4 faca
            Escreva (matriz[L,c]:4)
         FimPara
         EscrevaL
      FimPara

   Caso 2     //F�rmula Diagonal Principal
      Para L de 1 ate 4 faca
         EscrevaL (matriz[L,L]:4)
         Para c de 1 ate L faca
            Escreva("    ")
         FimPara
      FimPara

   Caso 3     //F�rmula Tri�ngulo Superior
      Para l <- 1 ate 3 faca
         Escreva("    ")
         Para c <- l+1 ate 4 faca
            Escreva(matriz[l,c]:4)
         FimPara
         EscrevaL()
         Para c <- 1 ate l faca
            Escreva("    ")
         FimPara
      FimPara
      EscrevaL

   Caso 4    //F�rmula Tri�ngulo inferior
      Para l <- 2 ate 4 faca
         EscrevaL()
         Para c <- 1 ate l-1 faca
            Escreva(matriz[l,c]:4)
         FimPara
      FimPara
      EscrevaL
   FimEscolha

ate (opcao = 5)

EscrevaL  //apresenta��o final
EscrevaL
EscrevaL
EscrevaL
EscrevaL
EscrevaL
Escreva("                                Hasta La Vista!")
EscrevaL
EscrevaL
EscrevaL
EscrevaL
EscrevaL
EscrevaL
fimalgoritmo

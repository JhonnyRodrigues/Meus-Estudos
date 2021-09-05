algoritmo "Dissecando Matrizes"
// Função : Cria um Menu com diferentes opções de exibição de uma matriz 4x4
// Autor :
// Data : 01/05/2021
// Seção de Declarações
var
matriz:vetor [1..4,1..4] de inteiro   //2 dimensões
L, c, opcao:inteiro

procedimento menu()   //Ainn! Procedimento sem parâmetro, por quê??"
inicio                //Porque não será preciso "copiar" para dentro dele
// qualquer valor de varável pois não existem operações matemáticas aqui dentro
EscrevaL
EscrevaL("MENU DE OPÇÕES")
EscrevaL("======================")    //não é recomendável comandos
EscrevaL("[1] Mostrar a Matriz")      //de imput/output em sub-programas
EscrevaL("[2] Diagonal Principal")    //embora eu tenha feito aqui...
EscrevaL("[3] Triângulo Superior")
EscrevaL("[4] Triângulo inferior")
EscrevaL("[5] Sair")
EscrevaL
Repita
   Escreva("     OPÇÃO: ")
   Leia (opcao)
   Se (opcao >5) ou (opcao <1) entao  //exibe mensagem se opção não existir
      EscrevaL("Esta opção não é válida!")
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

Repita    //nesse repita, o programa só encerra com a opção 5
   menu() //chama procedimento
   Escolha opcao

   Caso 1     //Fórmula Mostrar a Matriz
      Para L de 1 ate 4 faca
         Para c de 1 ate 4 faca
            Escreva (matriz[L,c]:4)
         FimPara
         EscrevaL
      FimPara

   Caso 2     //Fórmula Diagonal Principal
      Para L de 1 ate 4 faca
         EscrevaL (matriz[L,L]:4)
         Para c de 1 ate L faca
            Escreva("    ")
         FimPara
      FimPara

   Caso 3     //Fórmula Triângulo Superior
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

   Caso 4    //Fórmula Triângulo inferior
      Para l <- 2 ate 4 faca
         EscrevaL()
         Para c <- 1 ate l-1 faca
            Escreva(matriz[l,c]:4)
         FimPara
      FimPara
      EscrevaL
   FimEscolha

ate (opcao = 5)

EscrevaL  //apresentação final
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

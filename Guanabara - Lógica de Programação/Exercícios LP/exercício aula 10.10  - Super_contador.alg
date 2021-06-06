algoritmo "Super_Contador"
// Função :
// Autor :  Guanabara
// Data : 10/05/2019
// Seção de Declarações 
var
       opcao, cont : inteiro
       resposta: caractere
inicio
Repita
      EscrevaL ("|===============|")
      EscrevaL ("|      MENU     |")
      EscrevaL ("|===============|")
      EscrevaL ("| [1] De 1 a 10 |")
      EscrevaL ("| [2] De 10 a 1 |")
      EscrevaL ("| [3] Sair      |")
      EscrevaL ("|===============|")
      Escreva ("Escolha uma opção: ")
      Leia (opcao)
           Se (opcao = 1) entao
              Cont <- 1
              Repita
              Escreva (Cont, ".. ")
              cont <- cont +1
              Ate (cont > 10)
           Senao
                Se (opcao = 2) entao
                   Cont <- 10
                   Repita
                   Escreva (Cont, ".. ")
                   cont <- cont -1
                   Ate (cont < 1)
                Senao
                     Se (opcao = 3) entao
                     Fimse
                     fimalgoritmo
                FimSe
           FimSe
      Escreva("Deseja continuar? [S/N] ")
      Leia (Resposta)
      LimpaTela
Ate ( Resposta = "N")
      fimalgoritmo


algoritmo "Cinema"
// Função :
// Autor :
// Data : 25/06/2019
// Não encontrei uma função que converte tipo inteiro para caractere, para a var`Poltrona`
//Então lotei com uma porrada de Ifs, para atender tal condição

//O VISUALG É LIMITADO!!!!
var
Fileira: vetor[1..6] de Caractere
Poltrona: vetor[1..10] de Caractere
FileiraEsco, Resposta: Caractere
L, Assento, As, PoltronaEsco: inteiro // dá o nome à Fileira e Poltrona

Procedimento Lugares (As: inteiro) // recebe a numeracao do Lugar
inicio
EscrevaL("|______________________________________________________________|")
Escreva(Maiusc(Fileira[L]),":")    //funcao() maiuscula
Para As <- 1 ate 10 faca
   Se As = PoltronaEsco entao
      Escreva (" [---]")
      Poltrona[PoltronaEsco] <- " [---]"
   senao
      se AS = 1 entao
         Poltrona[As] <- "1"    //dando valores ao vetor poltrona
         Escreva (" [",Maiusc(Fileira[L]),Poltrona[As],"]")
      senao
         se AS = 2 entao
            Poltrona[As] <- "2"    //dando valores ao vetor poltrona
            Escreva (" [",Maiusc(Fileira[L]),Poltrona[As],"]")
         senao
            se AS = 3 entao
               Poltrona[As] <- "3"    //dando valores ao vetor poltrona
               Escreva (" [",Maiusc(Fileira[L]),Poltrona[As],"]")
            senao
               se AS = 4 entao
                  Poltrona[As] <- "4"    //dando valores ao vetor poltrona
                  Escreva (" [",Maiusc(Fileira[L]),Poltrona[As],"]")
               senao
                  se AS = 5 entao
                     Poltrona[As] <- "5"    //dando valores ao vetor poltrona
                     Escreva (" [",Maiusc(Fileira[L]),Poltrona[As],"]")
                  senao
                     se AS = 6 entao
                        Poltrona[As] <- "6"    //dando valores ao vetor poltrona
                        Escreva (" [",Maiusc(Fileira[L]),Poltrona[As],"]")
                     senao
                        se AS = 7 entao
                           Poltrona[As] <- "7"    //dando valores ao vetor poltrona
                           Escreva (" [",Maiusc(Fileira[L]),Poltrona[As],"]")
                        senao
                           se AS = 8 entao
                              Poltrona[As] <- "8"    //dando valores ao vetor poltrona
                              Escreva (" [",Maiusc(Fileira[L]),Poltrona[As],"]")
                           senao
                              se AS = 9 entao
                                 Poltrona[As] <- "9"    //dando valores ao vetor poltrona
                                 Escreva (" [",Maiusc(Fileira[L]),Poltrona[As],"]")
                              senao
                                 se AS = 10 entao
                                    Poltrona[As] <- "10"    //dando valores ao vetor poltrona
                                    Escreva (" [",Maiusc(Fileira[L]),Poltrona[As],"]")
                                 FimSe
                              FimSe
                           FimSe
                        FimSe
                     FimSe
                  FimSe
               FimSe
            FimSe
         FimSe
      FimSe
   FimSe
FimPara
EscrevaL
FimProcedimento

inicio
Repita
   EscrevaL
   EscrevaL("                   C I N E M A    A L L A D I N")
   EscrevaL("                   ----------------------------")

   Para L <- 1 ate 5 faca  //aparentemente esse comando só aceita tipo inteiro
      Se L = 1 entao
         Fileira[L] <- "A"
      senao
         Se L = 2 entao
            Fileira[L] <- "B"
         senao
            Se L = 3 entao
               Fileira[L] <- "C"            //atribuindo valores ao vetor Fileira
            senao
               Se L = 4 entao
                  Fileira[L] <- "D"
               senao
                  Se L = 5 entao
                     Fileira[L] <- "E"
                  FimSe
               FimSe
            FimSe
         FimSe
      FimSe
      Lugares (L) //chama o procedimento
   FimPara

   EscrevaL("|______________________________________________________________|")
   EscrevaL
   Escreva("Escolha uma fileira: ")
   Leia (FileiraEsco)
   Se FileiraEsco <> "a" entao
      repita
         escreva ("Essa fileira não existe! Escolha uma fileira: " )
         Leia (FileiraEsco)
      ate FileiraEsco = "a"
   fimse
   Fileira[L] <- FileiraEsco entao
   limpatela
   Lugares (L)  //chama procedimento


   EscrevaL
   Escreva("Escolha o Nº da poltrona: ")
   Leia(PoltronaEsco)
   Se Poltrona[PoltronaEsco] =  " [---]" entao
      REPITA
         EscrevaL ("Lugar já ocupado! Escolha outro lugar")
         Escreva("Escolha o Nº da poltrona: ")
         Leia(PoltronaEsco)
      ate Poltrona[PoltronaEsco] <>  " [---]"
   fimse
   //se PoltronaEsco >10 ou <1 entao
   //repita
   //EscrevaL ("Esse lugar não existe!")
   //Escreva("Escolha o Nº de poltrona existente: ")
   //Leia(PoltronaEsco)
   //ate PoltronaEsco >1 e <10 e <> " [---]"
   //fimse

   limpatela
   Lugares (L)  //chama procedimento

   Escreval
   EscrevaL ("Seu lugar foi reservado com SUCESSO!")
   EscrevaL

   Escreva("Deseja comprar mais ingressos? [S/N] ")
   Leia (resposta)
   LimpaTela
Ate ( Resposta = "N")

Escreval
Escreval
Escreval
Escreval
Escreval
Escreval
Escreval
Escreval
Escreva("   A P R O V E I T E      U M     B O M     F I L M E !!!          :)")
Escreval
Escreval
Escreval
Escreval
Escreval
Escreval
Escreval
Escreval
Escreval
Escreval
Escreval
Escreval
fimalgoritmo

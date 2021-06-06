algoritmo "Detector_de_Pesado"
 //função: aprendendo comando Procedimento (faz chamadas de linhas)
// Autor : Guanabara
// Data : 07/06/2019

var
   I: inteiro
   N, Pesado: caractere
   P, Mai: Real
   
PROCEDIMENTO Topo ()   // "topo" é um nome qualquer adotado, o parenteses é importante!
inicio
      Limpatela
      EscrevaL ("-------------------------------------------")
      EscrevaL ("--- D E T E C T O R   D E   P E S A D O ---")
      EscrevaL ("Maior peso até agora: ", Mai, " Kg")
      EscrevaL ("-------------------------------------------")
FimProcedimento

inicio
      Topo ()   // cabeçalho
      Para I <- 1 ate 5 faca
           Escreva ("Digite o nome: ")
           Leia (N)
           Escreva ("Digite o peso de ", N, ": ")
           Leia (P)
           Se (P>Mai) entao
              Mai <- P
              Pesado <- N
           FimSe
           Topo ()    // cabeçalho
      FimPara
      Topo ()          // cabeçalho
      EscrevaL ("A pessoa mais pesada foi ", Pesado, ", com ", Mai, " quilos.")
fimalgoritmo

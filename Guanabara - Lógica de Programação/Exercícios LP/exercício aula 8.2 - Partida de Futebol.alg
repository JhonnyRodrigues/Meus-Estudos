
algoritmo "Partida de Futebol"
//Declara o Status da partida
var
TIME1, TIME2, DIFERENCA: INTEIRO
TIME_A, TIME_B, STATUS: CARACTERE

inicio
EscrevaL ("---------------------")
EscrevaL ("BANGU x MADUREIRA")
EscrevaL ("---------------------")
EscrevaL ("Qual o time da casa? ")
Leia (TIME_A)

Se (TIME_A = "BANGU") entao
   TIME_B <- "MADUREIRA"
Senao
   TIME_B <- "BANGU"
FimSe

EscrevaL ("Quantos gols do ",TIME_A,"?")
Leia (TIME1)
EscrevaL ("Quantos gols do ",TIME_B,"?")
Leia (TIME2)

DIFERENCA <- (TIME1 - TIME2)

Escolha DIFERENCA
Caso 0
   STATUS <- ("EMPATE")
Caso (-3), (-2), (-1), (1), (2), (3)
   STATUS <- ("PARTIDA NORMAL")
Caso (-6),(-5),(-4),(4),(5),(6)
   STATUS <- ("GOLEADA")
OutroCaso
   STATUS <- ("HUMILHAÇÃO")
FimEscolha

EscrevaL ("---------------------")
EscrevaL ("Diferença: ", DIFERENCA)
EscrevaL ("Status: ", STATUS)
EscrevaL ("---------------------")
FimAlgoritmo

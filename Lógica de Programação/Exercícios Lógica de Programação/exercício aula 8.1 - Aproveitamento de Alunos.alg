algoritmo "Aproveitamento de Alunos"
// Função : Determinar aproveitamento do aluno
// Autor : Guanabara
// Data : 03/05/2019
// NOTA: JEIEL FODA!
var
NOTA1, NOTA2, MEDIA: real
APROVEITAMENTO: CARACTERE
inicio
EscrevaL ("---------------------")
EscrevaL ("ESCOLA JAVALI CANSADO")
EscrevaL ("---------------------")
Escreva ("Primeira Nota (de 0 a 1000): ")
Leia (NOTA1)
Escreva ("Segunda Nota (de 0 a 1000): ")
Leia (NOTA2)
MEDIA <- ((NOTA1+NOTA2)/2)

Se (MEDIA >= 900) entao
   APROVEITAMENTO <- "A"
Senao
   Se (MEDIA < 900) e (MEDIA >=800) entao
      APROVEITAMENTO <- "B"
   senao
      Se (MEDIA < 800) e (MEDIA >=700) entao
         APROVEITAMENTO <- "C"
      senao
         Se (MEDIA < 700) e (MEDIA >=600) entao
            APROVEITAMENTO <- "D"
         senao
            Se (MEDIA < 600) e (MEDIA >=500) entao
               APROVEITAMENTO <- "E"
            senao
               Se (MEDIA < 500) entao
                  APROVEITAMENTO <- "F"
               FimSe
            FimSe
         FimSe
      FimSe
   FimSe
FimSe

EscrevaL ("---------------------")
EscrevaL ("Média: ", MEDIA:2:1)
EscrevaL ("Aproveitamento: ", APROVEITAMENTO)
EscrevaL ("---------------------")
fimalgoritmo

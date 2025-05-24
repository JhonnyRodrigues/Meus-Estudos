algoritmo "Corrigindo Provas"
// Função :
// Autor : Guanabara
// Data : 21/06/2019
// Seção de Declarações
var
cont, aluno, lim, TotNotas: Inteiro
media: Real     //valor decimal
nota: vetor[1..5] de Inteiro
gabarito, resposta, nome: vetor[1..5] de Caractere

Procedimento cabecalho()
inicio
EscrevaL("      Aluno",aluno)
EscrevaL("--------------------------------")
EscrevaL
FimProcedimento

inicio
EscrevaL("      Cadastro de Gabarito")
EscrevaL("--------------------------------")
EscrevaL
Para cont <- 1 ate 5 faca
   Escreva("Questão",cont,":")
   Leia (gabarito[cont])
FimPara

LimpaTela

EscrevaL("Quantos alunos deseja avaliar?")
Leia (lim)


Para Aluno <- 1 ate lim faca
   Cabecalho
   Escreva(" Nome:")
   Leia (nome[aluno])
   EscrevaL("RESPOSTAS DADAS")
   Para cont <- 1 ate 5 faca
      Escreva("Questao",cont,":")
      Leia (resposta[cont])
           Se resposta[cont] = gabarito[cont] entao
              Nota[Aluno] <- Nota[Aluno] + 2 // cada acerto vale 2 pontos
           FimSe
   FimPara
   TotNotas <- TotNotas + Nota[Aluno]
   Limpatela
FimPara
   Media <- TotNotas / lim

LimpaTela

EscrevaL("N O T A S    F I N A I S")
EscrevaL("------------------------")
Para aluno <- 1 ate lim faca
   EscrevaL(nome[aluno]:15,"nota",NOTA[aluno])
FimPara
EscrevaL("------------------------")
EscrevaL
Escreva("Média da turma:",media:2:1) //media com duas casas, sendo 1 depois da virgula
EscrevaL
EscrevaL("------------------------")
fimalgoritmo

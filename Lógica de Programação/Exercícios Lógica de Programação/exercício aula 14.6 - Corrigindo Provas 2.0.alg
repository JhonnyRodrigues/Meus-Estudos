algoritmo "Corrigindo provas 2.0"
// Função :
// Autor : Jhonny
// Data : 01/05/2021
// Seção de Declarações
var
gabarito, aluno, resp_aluno:vetor[1..5] de caractere
nota_aluno:vetor[1..5] de inteiro
i, c, tot_alunos, somatorio:inteiro
media_turma: real
inicio
eSCREVAL("Passo 1: CADASTRO DE GABARITO")
escreval("=============================")
escreval
para i de 1 ate 5 faca
   escreva("Questão",i,": ")
   leia (gabarito[i])
fimpara
limpatela

Escreva("Quantos alunos deseja avaliar? ")
leia(tot_alunos)
limpatela

escreval("=============================")
eSCREVAL("Passo 2: RESPOSTAS DOS ALUNOS")
escreval("=============================")
escreval
para i de 1 ate tot_alunos faca
   EscrevaL("=============================")
   EscrevaL("           ALUNO ",i)
   EscrevaL("=============================")
   escreva("Nome: ")
   leia(aluno[i])
   escreval("RESPOSTAS DADAS")
   para c de 1 ate 5 faca
      Escreva("Questão",c,": ")
      leia(resp_aluno[c])
      Se resp_aluno[c] = gabarito[c] entao
         nota_aluno[i] <- nota_aluno[i] + 2 //5 questões, prova de 0 a 10
      fimse
   fimpara
   somatorio <- somatorio + nota_aluno[i] //só depois de computar as notas é que pode somar à média
   limpatela
fimpara
limpatela

eSCREVAL("Passo 3: APRESENTAÇÃO DAS NOTAS FINAIS")
escreval("======================================")
escreval
para i de 1 ate tot_alunos faca
   EscrevaL(aluno[i]:12,nota_aluno[i])
fimpara
escreval
escreval("======================================")
media_turma <- somatorio/tot_alunos
EscrevaL("Média da turma:",media_turma:2:1)
EscrevaL("======================================")
fimalgoritmo

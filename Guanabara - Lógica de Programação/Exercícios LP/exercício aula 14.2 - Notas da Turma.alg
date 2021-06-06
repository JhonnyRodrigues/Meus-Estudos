algoritmo "Notas da Turma"
// Função : após inserir 4 alunos e suas notas, calcula a média da turma e quantos alunos estão abaixo da média
// Autor : Guanabara
// Data : 11/06/2019
// Seção de Declarações
var
    nome: vetor[1..4] de caractere		//nome alunos
    n1: vetor[1..4] de real             //nota1
    n2: vetor[1..4] de real             //nota2
    m: vetor[1..4] de real              //média dos alunos
    i, tot: inteiro     		//índice e total alunos acima da media
    SM, MT: real                 //soma das medias e media da turma

	
inicio
      Para i <- 1 ate 4 faca
           EscrevaL("ALUNO", i)
           Escreva("Nome: ")
           Leia(nome[i])
           Escreva("Primeira Nota: ")
           Leia(n1[i])
           Escreva("Segunda Nota: ")
           Leia(n2[i])
           m[i] <- (n1[i] + n2[i]) / 2
           SM <- SM + m[i]	//soma das médias recebe média do aluno
      FimPara
      MT <- SM/4	//média total
      LimpaTela

      EscrevaL("    LISTAGEM DE ALUNOS")
      EscrevaL("----------------------------")
      Para i <- 1 ate 4 faca
           EscrevaL(nome[i]:15, m[i]:4:1)   // nome ocupando 15 espaços para um perfeito alinhamento, e o 4:1 são 4 algarismos, sendo 1 depois da virgula
           Se (m[i] > MT) entao
           Tot <- Tot + 1	//total alunos acima da media
           FimSe
      FimPara
      EscrevaL("Ao todo temos ",Tot, " alunos acima da media da turma que é ",MT:4:1)  //4:1 é a formatação de 4 algarismos, sendo 1 decimal
fimalgoritmo

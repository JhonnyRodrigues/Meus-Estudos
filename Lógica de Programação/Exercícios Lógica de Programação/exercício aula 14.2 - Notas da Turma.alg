algoritmo "Notas da Turma"
// Fun��o : ap�s inserir 4 alunos e suas notas, calcula a m�dia da turma e quantos alunos est�o abaixo da m�dia
// Autor : Guanabara
// Data : 11/06/2019
// Se��o de Declara��es
var
    nome: vetor[1..4] de caractere		//nome alunos
    n1: vetor[1..4] de real             //nota1
    n2: vetor[1..4] de real             //nota2
    m: vetor[1..4] de real              //m�dia dos alunos
    i, tot: inteiro     		//�ndice e total alunos acima da media
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
           SM <- SM + m[i]	//soma das m�dias recebe m�dia do aluno
      FimPara
      MT <- SM/4	//m�dia total
      LimpaTela

      EscrevaL("    LISTAGEM DE ALUNOS")
      EscrevaL("----------------------------")
      Para i <- 1 ate 4 faca
           EscrevaL(nome[i]:15, m[i]:4:1)   // nome ocupando 15 espa�os para um perfeito alinhamento, e o 4:1 s�o 4 algarismos, sendo 1 depois da virgula
           Se (m[i] > MT) entao
           Tot <- Tot + 1	//total alunos acima da media
           FimSe
      FimPara
      EscrevaL("Ao todo temos ",Tot, " alunos acima da media da turma que � ",MT:4:1)  //4:1 � a formata��o de 4 algarismos, sendo 1 decimal
fimalgoritmo

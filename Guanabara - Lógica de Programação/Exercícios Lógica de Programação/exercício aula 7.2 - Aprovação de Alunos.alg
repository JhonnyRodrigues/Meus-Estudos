algoritmo "Aprovação de Alunos"
// Função : Calcular média de notas para aprovação
// Autor : Guanabara
// Data : 03/05/2019
var
   NOTA1, NOTA2, MEDIA: REAL
inicio
	EscrevaL ("---------------------")
	EscrevaL ("ESCOLA JAVALI CANSADO")
	EscrevaL ("---------------------")
	Escreva ("Primeira Nota: ")
	Leia (NOTA1)
	Escreva ("Segunda Nota: ")
	Leia (NOTA2)
	MEDIA <- (NOTA1+NOTA2)/2
	
	EscrevaL ("---------------------")
	EscrevaL ("Média: ", MEDIA:2:1)
	Se (MEDIA >= 7) entao
		EscrevaL ("ALUNO APROVADO")
		EscrevaL ("---------------------")
	Senao
		EscrevaL ("ALUNO REPROVADO")
		EscrevaL ("---------------------")
	FimSe
fimalgoritmo

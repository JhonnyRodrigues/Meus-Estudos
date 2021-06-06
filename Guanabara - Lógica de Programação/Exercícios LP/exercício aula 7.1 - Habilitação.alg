algoritmo "Habilitação"
// Função : Determinar aptidão para tirar habilitação
// Autor : Guanabara
// Data : 03/05/2019
var
   ANO, ano_nasc, IDADE: Inteiro
inicio
	EscrevaL ("------------------------")
	EscrevaL ("DEPARTAMENTO DE TRANSITO")
	EscrevaL ("------------------------")
	Escreva ("Ano Atual (yyyy): ")
	Leia (ANO)
	Escreva ("Ano de Nascimento (yyyy): ")
	Leia  (ano_nasc)
	IDADE <- ANO - ano_nasc
	EscrevaL ("-------STATUS-------")
	EscrevaL ("Idade: ", IDADE, " anos")
	Se (IDADE >= 18) entao
		EscrevaL ("APTO A TIRAR A CARTEIRA")
		EscrevaL ("---------------------")
	Senao
		Escreva ("INAPTO A TIRAR A CARTEIRA")
		EscrevaL ("---------------------")
	FimSe
fimalgoritmo

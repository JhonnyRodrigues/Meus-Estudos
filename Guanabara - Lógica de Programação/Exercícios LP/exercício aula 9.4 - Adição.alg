algoritmo "Adição"
// Função : Operação de somar quantidade pré-estabelecida de valores
// Autor : Jonatas
// Data : 03/05/2019
var
   CONTADOR, NUMERO, QUANTOS,SOMA: INTEIRO
inicio

	CONTADOR <- 1
	SOMA <- 0
	Escreva ("Quantos números deseja contar? ")
	Leia (QUANTOS)
	Enquanto (CONTADOR <= QUANTOS) faca
		Escreva ("Digite o ", CONTADOR, "º valor: ")
		Leia (NUMERO)
		CONTADOR <- CONTADOR + 1
		SOMA <- SOMA + NUMERO		
	FimEnquanto
	EscrevaL ("A soma de todos os valores foi: ", SOMA)
fimalgoritmo

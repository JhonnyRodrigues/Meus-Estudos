algoritmo "Calculador de Empr�stimo"
// Fun��o : Determinar valor da mensalidade do empr�stimo
// Autor : Guanabara
// Data : 03/05/2019
var
   emprestimo, parcelas, parcelamento, valor: Real
inicio
	Escreva ("Qual o valor do empr�stimo? R$ ")
	Leia (valor)
	emprestimo <- valor * 1.2
	Escreva ("Quantas parcelas? ")
	Leia (parcelas)
	parcelamento <- emprestimo / parcelas
	Escreva ("Vou pagar", parcelas, " parcelas de R$", parcelamento)
fimalgoritmo

algoritmo "Calculador de Empréstimo"
// Função : Determinar valor da mensalidade do empréstimo
// Autor : Guanabara
// Data : 03/05/2019
var
   emprestimo, parcelas, parcelamento, valor: Real
inicio
	Escreva ("Qual o valor do empréstimo? R$ ")
	Leia (valor)
	emprestimo <- valor * 1.2
	Escreva ("Quantas parcelas? ")
	Leia (parcelas)
	parcelamento <- emprestimo / parcelas
	Escreva ("Vou pagar", parcelas, " parcelas de R$", parcelamento)
fimalgoritmo

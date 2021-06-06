algoritmo "Conte_Ate_Onde_O_Usuario_Quiser"
var
	contador, LIMITE, salto, begin : inteiro
inicio
      Escreva ("Até onde voce deseja contar?: ")
      Leia (LIMITE)
      Escreva ("Saltando de quanto em quanto? ")
      Leia (SALTO)
      Escreva ("Iniciando a partir de: ")
      Leia (begin)
      contador <- begin
      Enquanto (CONTADOR <= LIMITE) faca
		EscrevaL(contador)
		contador <- contador + SALTO
      FimEnquanto
      EscrevaL("Terminei de contar")
fimalgoritmo

algoritmo "S�_C_importa "
// Fun��o : Armazena somente nomes iniciados pela letra C
// Autor :  Guanabara
// Data : 11/06/2019
// Se��o de Declara��es
var
   nome: Caractere
   soC: vetor[1..15] de Caractere    //vetor que guarda nomes s� iniciado com C, o 15 � o tamanho do vetor
   c, tot: inteiro                   //contador, Total de nomes com C
inicio
      tot <-0
      Para c <- 1 ate 10 faca        // recebendo 10 nomes
           Escreva("Digite o nome: ")
           Leia(nome)
           Se (copia(maiusc(nome), 1, 1) = "C") entao // fun��es pr� definidas pelo Visualg para encontrar a letra na posi��o 1 da vari�vel nome
              tot <- tot + 1	//total de nomes iniciadas com C
              soC[tot] <- nome     // cumprido os requisistos das condicionais acima, o vetor soC guarda a variavel nome (ambas s�o do tipo caractere)
           FimSe
      FimPara

      LimpaTela
      EscrevaL("LISTAGEM FINAL")
      Para c <- 1 ate tot faca      // at� o total de nomes iniciados com C
           EscrevaL(soC[c])         // quando for vetor, lembrar de colocar a posi��o/�ndice
      FimPara
fimalgoritmo

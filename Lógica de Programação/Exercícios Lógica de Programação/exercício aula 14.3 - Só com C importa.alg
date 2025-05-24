algoritmo "Só_C_importa "
// Função : Armazena somente nomes iniciados pela letra C
// Autor :  Guanabara
// Data : 11/06/2019
// Seção de Declarações
var
   nome: Caractere
   soC: vetor[1..15] de Caractere    //vetor que guarda nomes só iniciado com C, o 15 é o tamanho do vetor
   c, tot: inteiro                   //contador, Total de nomes com C
inicio
      tot <-0
      Para c <- 1 ate 10 faca        // recebendo 10 nomes
           Escreva("Digite o nome: ")
           Leia(nome)
           Se (copia(maiusc(nome), 1, 1) = "C") entao // funções pré definidas pelo Visualg para encontrar a letra na posição 1 da variável nome
              tot <- tot + 1	//total de nomes iniciadas com C
              soC[tot] <- nome     // cumprido os requisistos das condicionais acima, o vetor soC guarda a variavel nome (ambas são do tipo caractere)
           FimSe
      FimPara

      LimpaTela
      EscrevaL("LISTAGEM FINAL")
      Para c <- 1 ate tot faca      // até o total de nomes iniciados com C
           EscrevaL(soC[c])         // quando for vetor, lembrar de colocar a posição/índice
      FimPara
fimalgoritmo

algoritmo "Ordenando um Vetor"
// Função : Ordena crescentemente um vetor, independentemente de seu tamanho, usando iteração PARA
// Autor :  Guanabara
// Data : 13/06/2019
// Seção de Declarações
var
    vet: vetor[1..4] de Inteiro
    i, j, aux: Inteiro       //2 posições e uma auxiliar para realizar a troca de posição
inicio

      Para i <- 1 ate 4 faca      // na posição 'i'
           Escreva("Digite um valor: ")
           Leia(vet[i])		//utilizando comando escreva, daremos 4 valores a um vetor
      FimPara

      Para i <- 1 ate 3 faca       // criado para ordenar o vetor; pq 3 e não 4? ora! é -1, pq não pode ser ele com ele mesmo
           Para j <- i+1 ate 4 faca    //note i+1!      e o 'j' quando estoura, pode recomeçar
                Se vet[i] > vet[j] entao
                   aux <- vet[i]	//recebe provisóriamente, para NÃO perder o dado quando for receber de [j]
                   vet[i]  <- vet[j]
                   vet[j] <- aux
                FimSe
           Fimpara
      FimPara

      Para i <- 1 ate 4 faca		//mais uma iteração 'para', dessa vez para declarar o vetor 'vet'
           Escreva ("{",vet[i], " }")
      FimPara
fimalgoritmo

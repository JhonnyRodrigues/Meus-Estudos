algoritmo "Ordenando um Vetor"
// Fun��o : Ordena crescentemente um vetor, independentemente de seu tamanho, usando itera��o PARA
// Autor :  Guanabara
// Data : 13/06/2019
// Se��o de Declara��es
var
    vet: vetor[1..4] de Inteiro
    i, j, aux: Inteiro       //2 posi��es e uma auxiliar para realizar a troca de posi��o
inicio

      Para i <- 1 ate 4 faca      // na posi��o 'i'
           Escreva("Digite um valor: ")
           Leia(vet[i])		//utilizando comando escreva, daremos 4 valores a um vetor
      FimPara

      Para i <- 1 ate 3 faca       // criado para ordenar o vetor; pq 3 e n�o 4? ora! � -1, pq n�o pode ser ele com ele mesmo
           Para j <- i+1 ate 4 faca    //note i+1!      e o 'j' quando estoura, pode recome�ar
                Se vet[i] > vet[j] entao
                   aux <- vet[i]	//recebe provis�riamente, para N�O perder o dado quando for receber de [j]
                   vet[i]  <- vet[j]
                   vet[j] <- aux
                FimSe
           Fimpara
      FimPara

      Para i <- 1 ate 4 faca		//mais uma itera��o 'para', dessa vez para declarar o vetor 'vet'
           Escreva ("{",vet[i], " }")
      FimPara
fimalgoritmo

algoritmo "contador com comando REPITA"
// Função : contar de 1 ate 10
// Autor : Guanabara
// Data : 08/05/2019
// Seção de Declarações 
var
   cont: inteiro
inicio
      cont <- 1
      Repita
           EscrevaL (Cont)         // observar variável cont nO ESCOPO
           Cont <- Cont +1
      Ate (Cont > 10)
fimalgoritmo

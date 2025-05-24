algoritmo "Seletor_de_pessoas"
// Função : determinar caracteristicas
// Autor : Guanabara
// Data : 10/05/2019
// Seção de Declarações: Condição: Homens com mais de 18 anos e cabelos castanhos
//                                 Mulheres entre 25 e 30 anos e cabelos loiros
var
idade, cor, homens, mulheres: inteiro
sexo, continuar: caractere
inicio
Repita
   EscrevaL ("===========================")
   EscrevaL ("    SELETOR DE PESSOAS")
   EscrevaL ("===========================")
   Escreva ("Qual o sexo? [M/F] " )
   Leia (sexo)
   Escreva ("Qual a idade? ")
   Leia (idade)
   EscrevaL ("Qual a cor do cabelo?")
   EscrevaL ("[1] Preto")
   EscrevaL ("[2] Castanho")
   EscrevaL ("[3] Loiro")
   EscrevaL ("[4] Ruivo")
   Escreva ("Resposta: ")
   Leia (cor)

   Se (sexo = "M") e (idade >= 18) e (cor = 2) entao
      homens <- homens + 1
   FimSe
   Se (sexo = "F") e (idade > 24) e (idade < 31) e (cor = 3) entao
      mulheres <- mulheres + 1
   FimSe

   Escreva ("Quer continuar? [S/N] ")
   Leia (continuar)
   LimpaTela
Ate (continuar = "N")

EscrevaL ("---------------------")
EscrevaL ("   RESULTADO FINAL   ")
EscrevaL ("---------------------")
EscrevaL ("Total de homens com mais de 18 e cabelos castanhos: ", homens)
EscrevaL ("Total de mulheres entre 25 e 30 e cabelos loiros: ", mulheres)
fimalgoritmo



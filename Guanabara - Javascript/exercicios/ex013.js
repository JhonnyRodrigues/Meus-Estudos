var agora = new Date()  //cria uma variável para receber a função Date
var diaSemana = agora.getDay() /*Nessa função, os dias são armazenados em um vetor, iniciando em zero. Exemplo:  0 = Domingo
                1 = Segunda-feira
                2 = Terça-feira
                3 = Quarta-feira
                4 = Quinta-feira
                5 = Sexta-feira
                6 = Sábado  */
console.log(diaSemana)
switch (diaSemana) {
    case 0:
        console.log('Domingo')
        break   //não esqueça do break, senão vai escrever todas as strings!
    case 1:
        console.log('Segunda-feira')
        break
    case 2:
        console.log('Terça-feira')
        break
    case 3:
        console.log('Quarta-feira')
        break
    case 4:
        console.log('Quinta-feira')
        break
    case 5:
        console.log('Sexta-feira')
        break
    case 6:
        console.log('Sábado')
        break
    default:
        console.log('[ERRO] Dia Inválido!')
        break   //esse break é opcional
}

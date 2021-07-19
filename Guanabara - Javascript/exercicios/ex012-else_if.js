var agora = new Date()  //função para pegar a hora do sistema
var hora = agora.getHours()
console.log(`Agora são exatamente ${hora} horas`)
if (hora < 6) {
    console.log('Boa madrugada!')
} else if (hora <= 12) {
    console.log('Bom dia!')
} else if (hora <= 18) {
    console.log('Boa tarde!')
} else {
    console.log('Boa noite!')
}
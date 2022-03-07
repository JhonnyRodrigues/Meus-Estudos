let amigo = {} //as chaves indicam ser um objeto
console.log(typeof amigo)

let colega = [] //array também é um objeto pois pertence à mesma classe dos objetos, vieram da mesma origem
console.log(typeof colega)

let conhecido = {   //No JS, objeto armazena todo tipo de dado, até mesmo função
    nome:"José",
    sexo:"M",
    idade: 30,
    peso: 85.4,     //observe o peso
    engordar(p) { this.peso += p } //`this.` faz referência ao próprio objeto
}
conhecido.engordar(5)   //chama método passando 5kg como parâmetro
console.log(`Engordou! Agora ${conhecido.nome} pesa ${conhecido.peso} Kilos.`)
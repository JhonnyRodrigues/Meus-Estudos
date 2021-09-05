let amigo = {} //as chaves indicam ser um objeto
console.log(typeof amigo)

let colega = [] //array é um objeto pois pertence à mesma classe dos objetos, vieram da mesma origem
console.log(typeof amigo)

let conhecido = {   //objeto armazena todo tipo de dado, até função
    nome:"José",
    sexo:"M",
    idade: 30,
    peso: 85.4,     //observe o peso
    engordar(p) { this.peso += p } //`this` faz referância ao próprio objeto
}
conhecido.engordar(5)   //chama método passando 5kg como parâmetro
console.log(`Engordou! Agora ${conhecido.nome} pesa ${conhecido.peso} Kilos.`)
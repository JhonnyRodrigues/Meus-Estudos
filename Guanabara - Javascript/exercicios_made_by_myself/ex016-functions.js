function ParImpar(n) {
    if (n % 2 == 0) {
        return 'PAR'
    } else {
        return 'IMPAR'
    }
}

ParImpar(9)
console.log(ParImpar()) //1ª maneira de imprimir na tela: função console.log()
var imprima = ParImpar(8) //2ª maneira de imprimir na tela: criando uma variável 
console.log(imprima)

/*///////////////////////////////////////////////////////////////////*/
function soma(a,b) {
    return a + b //perceba que dá pra retornar direto, sem precisar criar uma variável local
}
var salario = soma(1,3) //passagem de parâmetro por valor
console.log(`O salário é ${salario}`)    //4
var adiantamento = soma(1)
console.log(`O adiantamento é ${adiantamento}`) //retorna como NaN pq só foi passado 1 único parâmetro para a função, então o JS entende o outro parâmetro com undefined (Number + undefined = NaN)

function soma2(a=0, b=0) { //para resolver esse problema, atribua valor às variáveis
    return a + b
}
var adiantamento = soma2(1)
console.log(`O adiantamento é ${adiantamento}`)

/*******************************************************************
por ser uma Linguagem funcional. o JS permite armazenar função dentro de variável*/
let v = function(x) {return x*2} //a palavra reservada `function` declara uma função nomeada como `v`
console.log(`O dobro da variável v é ${v(5)}`) //perceba que foi passado um parâmetro na função/variável

/*Função TIPO FLECHA*/
const soma3 = (a,b) => a+b; // variável = () => operação
console.log(`a soma da função TIPO FLECHA é ${soma3(6,8)}`)
const hello1 = () => "Hello World!" //note a sintaxe sem as chaves{}
console.log(hello1())   //note que a variável acompanha parênteses()
const hello3 = (name) => {return "Hello " + name}
console.log(hello3("Jhonny"))

/*FATORIAL*/
function fatorial(f) {
    let fat = 1
    for (c=f;c>1;c--) {
        fat *= c
    }
    return fat
}
console.log(`O fatorial é ${fatorial(5)}`)

/*FATORIAL de maneira RECURSIVA********************
   recursão é quando uma função chama ela mesma
   Entenda: 5! = 5 x 4 x 3 x 2 x 1
   então 5! = 5 x 4!
   logo, n! = n x (n-1)! exceto quando 1! = 1*/
function fatorialRecursiva(y){
    if(y == 1) {
        return y
    } else {
        return y * fatorialRecursiva(--y)
    }
}
console.log(fatorialRecursiva(6))
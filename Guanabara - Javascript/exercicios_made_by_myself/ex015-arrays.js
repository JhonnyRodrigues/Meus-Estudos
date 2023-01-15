let vetor = [5,8,2,9,3]                                               //declarando um vetor
console.log(`O vetor criado é [${vetor}]`)

console.log(`Esse vetor tem ${vetor.length} posições`)               //A classe Array possui o atributo comprimento
console.log(`O primeiro valor do vetor é ${vetor[0]}`)

vetor.sort()                                                          //método de ordenação de vetor
console.log(`O vetor ordenado é [${vetor}]`)

vetor.push(-15)                                                         //método adicionar ao final
console.log(`Adicionando um elemento ao final do vetor: [${vetor}]`)

for (let posição = 0; posição < vetor.length; posição++) {
    console.log(`A posição ${posição} tem o valor ${vetor[posição]}.`)  //percorrendo o vetor com a iteração for
}

for (let posição in vetor) {                                            //percorrendo com for-in (código mais enxuto)
    console.log(`A posição ${posição} tem o valor ${vetor[posição]}`)
}

let pos = vetor.indexOf(4)   //método buscar valores dentro de um vetor (no caso, busca o valor 4)
if (pos == -1) {             //o método .indexof() retorna -1 quando não encontra o valor
    console.log('[ERRO] Valor não encontrado')
} else {
    console.log(`O valor está na posição ${pos}`)
}
/*---------------------------------------------------------------------------------------------*/
/*DIFERENÇA ENTRE FOR..IN E FOR..OF*/
var arr = ["gato", "cachorro", "macaco"];
for (var i in arr) { //itera sobre o ÍNDICE das propriedades do objeto
    console.log(i); // Imprime "0", "1", "2"
}

for (var i of arr) { //itera sobre os VALORES dessas propriedades.
    console.log(i); // Imprime "gato", "cachorro", "macaco"
}
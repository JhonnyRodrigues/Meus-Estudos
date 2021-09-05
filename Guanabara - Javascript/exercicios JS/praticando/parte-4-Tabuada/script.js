function geraTabuada() {

let número = window.document.getElementById('txtn')
let tabuada = window.document.getElementById('seltab')

if (número.value.length == 0) { //verifica se foi digitado algum valor
    window.alert('[ERRO] Por favor, insira um número!')    
    } else {
    let num = Number(número.value) //convertendo string para number
    tabuada.innerHTML = ''  //limpa a lista
    for(c = 1; c < 11; c++) {
        let item = document.createElement('option') //cria uma tag <option>
        item.text = `${num} x ${c} = ${num*c}`  //é possivel colocar expressões dentro de ${placeholder}
        item.value = `tab${c}`  //nomeando cada nova tag <option> caso precise trabalhar com PHP
        tabuada.appendChild(item)   //a tag <select> recebe a tag <option>
        } 
    }
}
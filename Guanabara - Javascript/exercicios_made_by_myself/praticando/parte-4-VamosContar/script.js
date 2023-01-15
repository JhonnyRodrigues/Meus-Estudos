function contar() {
    let inicio = window.document.getElementById('cinicio') //a variável recebe @#$% uma função!!!
    let fim = window.document.getElementById('cfim')
    let passo = window.document.getElementById('cpasso')
    let resultado = window.document.getElementById('resultado')

    if(inicio.value.length == 0 || fim.value.length == 0 || passo.value.length == 0) { 
        window.alert('[ERRO] Faltam dados!')    //testa se a string está vazia
        resultado.innerHTML = 'Impossível contar'
    } else {
        resultado.innerHTML = 'Contando:<br>'
        /**CONVERTENDO PARA NÚMEROS*/
        let i = Number(inicio.value)    //a tag <input type='number'> retorna tipo string, é preciso converter para poder calcular números
        let f = Number(fim.value)
        let p = Number(passo.value)
        
        if (p <= 0) {
            window.alert('[ERRO] Passo Inválido! Considerando passo 1.')
            p = 1
        }
        if (i < f) {    //CONTAGEM CRESCENTE
            for(let c = i; c <= f; c += p) { //c começa em i, enquanto c for <= a, c recebe ele mesmo + p
                resultado.innerHTML += `${c} \u{1F449}` //entre crases para poder concatenar string + variável + emoji
            }
        } else {    //CONTAGEM DECRESCENTE
            for (let c = i; c >= f; c -= p) {
                resultado.innerHTML += `${c} \u{1f449}`
            }
        }        
        resultado.innerHTML += `\u{1F3C1}` //o código emoji só funciona entre crases
    }
}
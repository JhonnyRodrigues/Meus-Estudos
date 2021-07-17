let num = document.querySelector('input#num')
let lista = document.querySelector('select#selnum')
let res = document.querySelector('div#resultado')
let valores = []

function isNumero(n) {
    if (Number(n) >= 1 && Number(n) <= 100) {
        return true
    } else {
        return false
    }
}

function inLista(n, l) {
    if (l.indexOf(Number(n)) != -1) {
        return true
    } else {
        return false
    }
}

function adicionar() {
    if (isNumero(num.value) && !inLista(num.value, valores)) {
        res.innerHTML = '' //limpa o resultado ao adicionar novo elemento
        valores.push(Number(num.value))
        let item = document.createElement('option')
        item.text = `O número ${num.value} adicionado`
        selnum.appendChild(item)
    } else {
        alert('Valor inválido ou já encontrado na lista')
    }
    num.value = '' //limpa o campo de texto
    num.focus()
}

function finalizar() {
    if (valores.length < 1) {
        alert('[ERRO] Adicione valores antes de finalizar!')
    } else {
        let tot = valores.length
        let maior = valores[0]
        let menor = valores[0]
        let soma = 0
        let media = 0
        for(let pos in valores) {
            soma += valores[pos]
            if (valores[pos] > maior)
                maior = valores[pos]
            if (valores[pos] < menor)
                menor = valores[pos]
        }
        media = soma / tot
        res.innerHTML = '' //limpa o resultado
        res.innerHTML += `<p>Ao todo, temos ${tot} valores cadastrados.</p>`
        res.innerHTML += `<p>O maior valor foi ${maior}.</p>`
        res.innerHTML += `<p>O menor valor foi ${menor}.</p>`
        res.innerHTML += `<p>A soma de todos os valores é ${soma}.</p>`
        res.innerHTML += `<p>A média dos valores é ${media}.</p>`
    }
}
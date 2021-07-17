let num = document.querySelector('input#num')
let lista = document.querySelector('select#selnum')
let res = document.querySelector('div#resultado')
let valores = []

function isNumero(n) {
    if (Number(n) >=1 && Number(n) <= 100) {
        return true
    } else {
        return false
    }
}

function inLista(n,l) {
    if (l.indexOf(Number(n)) != -1) {
        return true
    } else {
        return false
    }
}

function adicionar() {
    if (isNumero(num.value) && !inLista (num.value.valores)) {
        alert('Tudo OK!')
    } else {
        alert('Valor inválido ou não encontrado na lista')
    }
}
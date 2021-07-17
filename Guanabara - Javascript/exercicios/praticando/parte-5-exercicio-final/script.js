//declarando as variáveis fora do bloco das funções
var txtnum = window.document.getElementById('num')
var select = window.document.getElementById('selnum')
var resultado = document.getElementById('resultado')
var vetor = []
//declarando funções de operação
var quantidade = function (vet) { return vet.length }
var maiorValor = function () { if (num > maiorValor) { maiorValor = num } return maiorValor}
var menorValor = function () { if (num < menorValor) { menorValor = num } }
var soma = () => soma + num     //função tipo FLECHA
var media = () => soma / quantidade

function adicionar() {
    //verifica se algum valor foi digitado
    if (txtnum.value.length == 0) {
        window.alert('[ERRO] Nenhum valor inserido. Digite um número!')
    } else { 
       num = Number(txtnum.value) //Converte para number
    }
    //verifica se os valores estão fora de faixa
    if (Number(num) < 1 || Number(num) > 100) {
        alert('[ERRO] Valor fora de faixa. Digite um valor entre 1 e 100!')
    }
    if (num >= 1 && num <= 100) {
        //verifica se não existe número repetido
        if (vetor.indexOf(num) == -1) {
            vetor.push(num) //adiciona valor ao final do vetor
            maiorValor()
            menorValor()
            soma()
            media()
        //cria, edita e apresenta a tag <option> no campo <select>
        let escolha = window.document.createElement('option')
        escolha.text = `Valor ${num} adicionado`
        select.appendChild(escolha)
        } else {
        alert('[ERRO] Este número já foi inserido. Digite outro valor.')
        }
    } 
    num.value = '' //limpa o campo de texto
    num.focus() //ativa o curso no campo de texto
}

function finalizar() {
    if (vetor.length < 1) {
        alert('[ERRO] Adicione valores antes de finalizar!')
    } else {
        resultado.innerHTML += `<p>Ao todo, temos ${quantidade(vetor)} números cadastrados</p>`
        resultado.innerHTML += `<p>O maior valor informado foi ${Number(maiorValor)}</p>`
        resultado.innerHTML += `<p>O menor valor informado foi ${menorValor.value}</p>`
        resultado.innerHTML += `<p>Somando todos os valores, temos ${soma}</p>`
        resultado.innerHTML += `<p>A média dos valores digitados é ${media.value}</p>`
    }
}
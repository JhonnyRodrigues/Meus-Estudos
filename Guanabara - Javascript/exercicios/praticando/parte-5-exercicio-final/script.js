//declare as variáveis fora do bloco das funções
var txtnum = window.document.getElementById('num')
var select = window.document.getElementById('selnum')
var resultado = document.getElementById('resultado')
var vetor = []

function adicionar() {
    //verifica se algum valor foi digitado
    if (txtnum.value.length == 0) {
        window.alert('[ERRO] Nenhum valor inserido. Digite um número!')
        delete num //importante para não adicionar quando textbox vazia
    } else { //senão, converte para number
        num = Number(txtnum.value)
    }
    //verifica se os valores estão fora de faixa
    if (num < 1 || num > 100) {
        alert('[ERRO] Valor fora de faixa. Digite um valor entre 1 e 100!')
    }
    if (num >= 1 && num <= 100) {
        if (vetor.indexOf(num) == -1) { //verifica se inseriu nº repetido
            vetor.push(num) //adiciona valor ao final do vetor

            var quantidade = function (q) { return vetor.length }
            var maiorValor = () => {
                let maior
                if (num > maior) { return maior }
            }
            var menorValor = () => {
                let menor
                if (num < menor) { return menor }
            }
            var soma = soma + num
            var media = soma / quantidade

            let escolha = window.document.createElement('option')
            escolha.text = `Valor ${num} adicionado`
            select.appendChild(escolha)
        } else {
            alert('[ERRO] Este número já foi inserido')
        }
    }
}

function finalizar() {
    if (vetor.length < 1) {
        alert('[ERRO] Adicione valores antes de finalizar!')
    } else {
        resultado.innerHTML += `Ao todo, temos ${quantidade(q)} números cadastrados<br>`
        resultado.innerHTML += `O maior valor informado foi ${maiorValor}<br>`
        resultado.innerHTML += `O menor valor informado foi ${menorValor}<br>`
        resultado.innerHTML += `Somando todos os valores, temos ${soma}<br>`
        resultado.innerHTML += `A média dos valores digitados é ${media}`
    }
}
/*botao = getElementById('btnfim')
botao.classeOuElemento{ margin: 0 auto; }*/
//declarando as variáveis fora de bloco de funções
var num = document.querySelector('input#num');
var select = window.document.getElementById('selnum');
var resultado = document.querySelector('div#resultado')
var vetor = []
var maior = maiorValor(maior)
var menor = menorValor(menor)
var soma = somar(soma)
var media = calcMedia()
//declarando funções de operação
function comprimento() { return vetor.length }
function maiorValor() { if (num.value > maior) { maior = num.value } return maior }
function menorValor() { if (num.value < menor) { menor = num.value } return menor }
function somar() { return soma + num.value }
function calcMedia() { return soma / tamanho }

function adicionar() {
    //verifica se algum valor foi digitado
    if (num.value == '') {
        window.alert('[ERRO] Nenhum valor inserido. Digite um número!')
    }
    //verifica se os valores estão fora de faixa
    if (num.value < 1 || num.value > 100) {
        alert('[ERRO] Valor fora de faixa. Digite um valor entre 1 e 100!')
    }
    if (num.value >= 1 && num.value <= 100) {
        if (vetor.indexOf(num.value) == -1) { //verifica se não existe número repetido
            resultado.innerHTML = '' //limpa tela sempre que adicionar novo número
            vetor.push(num.value) //adiciona valor ao final do vetor
            //chama as funções
            maiorValor(maior)
            menorValor(menor)
            somar(soma)
            //cria, edita e apresenta a tag <option> no campo <select>
            let escolha = window.document.createElement('option')
            escolha.text = `Valor ${num.value} adicionado`
            select.appendChild(escolha)
        } else {
            alert('[ERRO] Este número já foi inserido. Digite outro valor.')
        }
    }
    calcMedia()
    num.value = '' //limpa o campo de texto
    num.focus() //ativa o cursor no <input>
}

function finalizar() {
    var tamanho = comprimento()
    if (tamanho < 1) {
        alert('[ERRO] Adicione valores antes de finalizar!')
    } else {
        resultado.innerHTML += `<p>Ao todo, temos ${tamanho} números cadastrados</p>`
        resultado.innerHTML += `<p>O maior valor informado foi ${Number(maior)}</p>`
        resultado.innerHTML += `<p>O menor valor informado foi ${menor}</p>`
        resultado.innerHTML += `<p>Somando todos os valores, temos ${soma}</p>`
        resultado.innerHTML += `<p>A média dos valores digitados é ${media}</p>`
    }
}
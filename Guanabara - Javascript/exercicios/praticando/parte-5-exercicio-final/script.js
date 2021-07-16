    function adicionar() {
        var vetor = []
        var txtnum = window.document.getElementById('num')
        var select = window.document.getElementById('selnum')
        var resultado = document.getElementById('resultado')

        //verifica se algum valor foi digitado
        if (txtnum.value.length == 0) {
            window.alert('[ERRO] Nenhum valor inserido. Digite um número!')
        } else { //senão, converte para number
            num = Number(txtnum.value)
            }
        //verifica se foram digitados apenas números e não letras + testa o length para não apresentar 2 alerts seguidos
        if (txtnum.value.length != 0 && isNaN(num)) {
            alert('[ERRO] Somente Números são aceitos!')
        }
        if (num >= 1 && num <= 100) {
            vetor.push(num)
            var quantidade = vetor.length
            var maiorValor = () => {
                let maior
                if (num > maior) {return maior}}
            var menorValor = () => {
                let menor
                if (num < menor) {return menor}}
            var soma = soma + num
            var media = soma / quantidade 
        
        let escolha = window.document.createElement('option')
        escolha.text = `Valor ${num} adicionado`
        select.appendChild(escolha)
        } else {
            alert('[ERRO] Valor fora de faixa. Digite um valor entre 1 e 100!')
        }
}
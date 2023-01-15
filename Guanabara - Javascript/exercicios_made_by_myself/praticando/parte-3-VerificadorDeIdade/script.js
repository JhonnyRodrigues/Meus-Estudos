function verificar() {
    var agora = new Date()  //função que retorna a data sistema
    var anoAtual = agora.getFullYear()   //armazena o ano atual dentro da variavel
    var respAno = window.document.getElementById('txtano')
    var resultado = document.getElementById('resultado') //a variável `resultado` recebe o que estiver escrito na div `resultado`
    //var resultado = document.querySelector('div#resultado') também pode ser feito dessa forma
    if (respAno.value.length == 0 || Number(respAno.value) > anoAtual) { //verifica se o campo ano está vazio ou se é acima do ano atual
        window.alert('[ERRO] Verifique o ano e tente novamente!')
} else {
    window.alert('Tudo OK!')
    }
    var formsex = document.getElementsByName('radsex') //note o plural, como é mais de um genero, vai armazenar um vetor de 2 posições: [0,1]
    var idade = anoAtual - Number(respAno.value)
    var gênero = ''     //cria variável string vazia, pode até usar acento ao criar variavel em JS
    var img = document.createElement('img') //cria uma tag <img> através de javascript
    img.setAttribute('id', 'foto')    //configura um atributo `id` = 'foto' para a tag <img>
    if (formsex[0].checked) {   //se a opção `masculino` for selecionada
        gênero = 'Homem'
        if (idade > 0 && idade <15) {
            img.setAttribute('src','foto-crianca-m.png')    //não esqueçe de colocar a estensão do arquivo!
        } else if (idade <30) {
            img.setAttribute('src','foto-jovem-m.png')
        } else if (idade <50) {
            img.setAttribute('src', 'foto-adulto-m.png')
        } else {
            img.setAttribute('src', 'foto-idoso-m.png')
        }
    } else if (formsex[1].checked) {    //se a opção `feminino` for selecionada
        gênero = 'Mulher'
        if (idade > 0 && idade <15) {
            img.setAttribute('src', 'foto-crianca-f.png')
        } else if (idade <30) {
            img.setAttribute('src','foto-jovem-f.png')
        } else if (idade <50) {
            img.setAttribute('src','foto-adulto-f.png')
        } else {
            img.setAttribute('src','foto-idosa-f.png')
        }
    }
    resultado.style.textAlign = 'center'    //centralizando a div por JS
    resultado.innerHTML = `Detectamos ${gênero} com ${idade} anos`  //a variavel `resultado` recebe a seguinte string.
    resultado.appendChild(img)  //use esse método quando tiver criado um elemento por JS
}
function carregar() {
var msg = window.document.getElementById('msg') //pega a mensagem
var img = window.document.getElementById('imagem') //pega a foto
var agora = new Date()
var hora = agora.getHours()
//hora = 15 //(teste)
msg.innerHTML = `Agora são ${hora} horas.`
if (hora < 6) {
    //BOM DIA! 
    img.src="manha.jpg"
    document.body.style.background = '#e2cd9f'
} else if (hora >12 && hora <18){
    //BOA TARDE!
    img.src="tarde.jpg"
    document.body.style.background = '#b9846f'
    } else {
        //BOA NOITE!
    img.src="noite.jpg"
    document.body.style.background = '#515154'
    }
}
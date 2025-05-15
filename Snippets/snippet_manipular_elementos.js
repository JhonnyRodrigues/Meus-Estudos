//capturar varios tipos de elementos
let camposDesabilitados = document.querySelectorAll("select, #select2-id_sc_field_descricao_risco-container, input[type=radio], textarea, input[type=text]");

//fun��o setProperty()
document.querySelector('span.select2-container').style.setProperty('width', '0px', 'important');

//fun��o setAttribute()
opcaoConcluir.setAttribute('disabled', true);

//operador '.' para capturar elemento atrav�s de suas classes (no plural)
document.querySelector('td.scFormDataFontOdd.css_motivo_encaminhamento_line')

//operador '>' para capturar o elemento filho
let opcaoConcluir = document.querySelector('#id_sc_field_fk_status > option[value="4"]');

//(o problema da diferente sintaxe entre o CSS:checked e o JS.selected) para capturar elemento <select> com atributo espec�fico 
/* 1� op��o: */ document.querySelector('#id_sc_field_situacao > option[value="4"]:checked')
/* 2� op��o: */ document.querySelector('#id_sc_field_situacao > option[value="4"]').selected

//operador like '^' para capturar elementos semelhantes
document.querySelectorAll('[id^=sc_exc_line_]').forEach((el) => el.addEventListener('click', () => {
    document.querySelector('#nmsc_iframe_liga_MED_CADASTRAR_AGENDAMENTOS_F').contentWindow.location.reload(true);
    document.querySelector('#iframe_item_131').contentWindow.location.reload(true)
}));

//pseudoclass ':nth-child()' para capturar elementos filhos
tabela = document.querySelector('table#hidden_bloco_10 tbody tr:nth-child(2)').style['flex-direction'] = 'column';

//iterar 1 estilo em selectorAll
document.querySelectorAll('span#id_read_off_jornada >table >tbody >tr').forEach((el) => {el.style.display = 'inline-flex'})

//fun��o (CSS) 'has()' para capturar o elemento pai que n�o tem #id
document.querySelector('td:has(#id_read_on_motivo_encaminhamento)'); //cuidado, pois no 1� <td> que encontra um filho com esse #id, ir� capturar todo mundo abaixo dele! Existe outra op��o: usar a fun��o closest()

//fun��o .parentNode para capturar somente elemento pai
document.querySelector('span#id_ajax_label_mensagem_revisao').parentNode.style.textAlign='center';


//fun��o para hover em bot�o
function configurarBotao(botao) {
    botao.addEventListener('mouseover', (event) => {
        const styles = {
            color: 'white',
            backgroundColor: '#727cf5',
            cursor: 'pointer',
            userSelect: 'none'
        };

        for (const style in styles) {
            event.target.style[style] = styles[style];
        }
    });
    botao.addEventListener('mouseout', (event) => {
        const styles = {
            color: '#727cf5',
            backgroundColor: 'white',
            cursor: 'default',
            userSelect: 'none'
        };

        for (const style in styles) {
            event.target.style[style] = styles[style];
        }
    });
    botao.addEventListener('mousedown', (event) => {
        event.preventDefault(); //impede a sele��o do texto dentro do <input> (por algum motivo, a propriedade [userSelect: 'none'] n�o est� funcionando)
    });
    botao.onmousedown = function(event) {event.preventDefault();};	
    botao.onmousemove = function(event) {event.preventDefault();};
}
const botaoResposta = document.querySelector('#id_sc_field_btn_resposta');
const botaoSolucao = document.querySelector('#id_sc_field_btn_adicionar_solucao');
configurarBotao(botaoResposta);
configurarBotao(botaoSolucao);


//fun��o adicionar propriedades
function centraliza_botao(conteiner) {
    const styles = {
        display: 'flex',
        flexWrap: 'wrap',
        alignContent: 'center',
        justifyContent: 'center',
        //alignItems: 'center', ou em camelCase ou entre aspas simples!
        'align-items': 'center'
    };
    // conteiner = document.querySelector('#id_sc_field_btn_codchamado_<?={sc_seq_register}?>');
    conteiner = document.querySelectorAll('a[id^="id_sc_field_btn_codchamado_"]');
    conteiner.forEach((botao) => {
        for (const style in styles) {
            botao.style[style] = styles[style];
        }
    });
}


window.onload = function() {} //s� aplica JS depois do DOM totalmente carregado
addEventListener("DOMContentLoaded", (event) => {}); //The DOMContentLoaded event is fired when the document has been completely loaded and parsed, without waiting for stylesheets, images, and subframes to finish loading (the load event can be used to detect a fully-loaded page).

//manipulando conte�do
elemento.innerText = 'R$4.235.159,53';
const valor = parseFloat(elemento.innerText.replace('R$', '').split(',')[0].replaceAll('.',''));

//ADICIONANDO CLASSE CSS
elemento.classList.add('btn-outline-primary');

// INJETANDO ELEMENTO NO BODY PARA ALTERAR PROPRIEDADE DE TODA A CLASSE
let suspeitoWidth100 = document.createElement('style');
suspeitoWidth100.setAttribute('id', 'id_para_encontrar');
suspeitoWidth100.innerHTML = ".scFormTable { width: 100%; }";
document.querySelector('body').append(suspeitoWidth100);

//Add text before or after an HTML element
var text = document.createTextNode('the text');
var child = document.getElementById('childDiv');
child.parentNode.insertBefore(text, child);
//Exemplo: 
document.querySelector('td#Check_All_jornada').parentNode.insertBefore(document.createTextNode('TODOS OS DIAS '), document.querySelector('td#Check_All_jornada'));

//Manipular elementos de um MODAL: use .parent para transitar entre diferentes CONTEXTOS
window.parent.document.querySelector('div#TB_window').style.setProperty('width', 'auto');
window.parent.document.querySelector('div#TB_window >#TB_iframeContent').style.setProperty('width', '360');

//Para capturar elementos acima, como pai, av�, tio-av�, use .PARENT ou a fun��o CLOSEST()
//Exemplo da estrutura:
<div>
    <div>
        <select required>
            <option value="" disabled selected>selecione o valor</option>
        </select>
        </div>
    <label>nome do campo</label>
</div>
//Como capturar o label correspondente
document.querySelectorAll('select[required]').forEach((el) => {
    if (el.value == '') {
        el.parentElement.querySelector('input').classList.add('invalid');
        camposVazios.push(el.parentElement.parentElement.querySelector('label').textContent.trim());
    }
})
//Outro exemplo usando closest + childNodes para capturar conte�do do elemento pai
document.querySelector(`input[type="radio"][name="sexo"]`).closest('p').childNodes[0].textContent.trim()


//Transformando um NodeList em Array usando SPREAD OPERATOR
/*(No exemplo abaixo, eu precisava usar a fun��o filter() em uma NodeList, por�m essa fun��o s� est� presente em Arrays)
(Minha necessidade era retornar todas as <options> de um <select> com exce��o da <option value="4">CANCELADA</option>)*/
[...document.querySelectorAll('#id_sc_field_situacao > option')].filter((option) => option.value != 4);


//Usando PROMISES para executar fun��o ap�s t�rmino de outra fun��o
function funcao1() { return new Promise(resolve => { /* L�gica da fun��o 1 */ }); }
function funcao2() { /* L�gica da fun��o 2 */ }
funcao1().then(() => { funcao2(); });
/* Exemplo usando fun��o da biblioteca SweetAlert2: */
Swal.fire({text: "N�o � permitido assinar esta demanda antes do Diretor respons�vel!"}).then(
	() => { window.parent.tb_remove(); } //mostra o alerta e, s� depois de confirmar, fecha o modal
);


//Clonar elementos
let iconElement = document.createElement('i');
matriculasElements.forEach((link) => {
    link.appendChild(iconElement.cloneNode(true));
});


//A propriedade contentWindow retorna o objeto gerado por um <iframe> (CSS n�o permite cross-domain, diferente de JS)
window.parent.document.querySelector('div#TB_window > iframe').contentWindow.document.querySelector('body').style.background = 'orange';

//Converter string data:'20/09/2024' em objeto Date com sa�da: 'Fri Sep 20 2024 00:00:00 GMT-0300 (Hor�rio Padr�o de Bras�lia)'
function converterStringParaData(dataString) { //
    const [dia, mes, ano] = dataString.split('/');
    const dataObjeto = new Date(ano, mes - 1, dia); //m�s em JavaScript inicia no zero, por isso subtra� 1
    return dataObjeto;
}

// Verificar se a tecla ESC foi pressionada
document.addEventListener('keydown', function(event) {
    if (event.code === 'Escape') { 
        closeModal();
    }
});

// Diferentes opcoes de assinaturas para passagem de parametro em funcoes como a addEventListener()
// Opcao A): passando o evento diretamente
CPFrequisitante.addEventListener('input', aplicarMascaraUnico);
// Opcao B): passando o elemento, via wrapper, para extrair event.target
CPFrequisitante.addEventListener('input', e => aplicarMascaraUnico(e.target));
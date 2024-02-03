//capturar varios tipos de elementos
let camposDesabilitados = document.querySelectorAll("select, #select2-id_sc_field_descricao_risco-container, input[type=radio], textarea, input[type=text]");

//função setProperty()
document.querySelector('span.select2-container').style.setProperty('width', '0px', 'important');

//função setAttribute()
opcaoConcluir.setAttribute('disabled', true);

//operador '.' para capturar elemento através de suas classes (no plural)
document.querySelector('td.scFormDataFontOdd.css_motivo_encaminhamento_line')

//operador '>' para capturar o elemento filho que não tem #id 
let opcaoConcluir = document.querySelector('#id_sc_field_fk_status > option[value="4"]');
opcaoConcluir.style.setProperty('color', 'lightgray', 'important');

//operador like '^' para capturar elementos semelhantes
if (document.querySelectorAll('[id^=sc_exc_line_]') != null) {
    document.querySelectorAll('[id^=sc_exc_line_]').forEach((el) => el.addEventListener('click', () => {
        document.querySelector('#nmsc_iframe_liga_MED_CADASTRAR_AGENDAMENTOS_F').contentWindow.location.reload(true);
        document.querySelector('#iframe_item_131').contentWindow.location.reload(true)
    }))
}

//pseudoclass ':nth-child()' para capturar elementos filhos
tabela = document.querySelector('table#hidden_bloco_10 tbody tr:nth-child(2)').style['flex-direction'] = 'column';
motivo = document.querySelector('td#hidden_field_data_motivo_encaminhamento table tbody tr:nth-child(1)');

//iterar 1 estilo em selectorAll
document.querySelectorAll('span#id_read_off_jornada >table >tbody >tr').forEach((el) => {el.style.display = 'inline-flex'})

//função (CSS) 'has()' para capturar o elemento pai que não tem #id
document.querySelector('td:has(#id_read_on_motivo_encaminhamento)'); //cuidado, pois no 1º <td> que encontra um filho com esse #id, irá capturar todo mundo abaixo dele!

//função .parentNode para capturar somente elemento pai
document.querySelector('span#id_ajax_label_mensagem_revisao').parentNode.style.textAlign='center';

//função para hover em botão
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
        event.preventDefault(); //impede a seleção do texto dentro do <input> (por algum motivo, a propriedade [userSelect: 'none'] não está funcionando)
    });
    // botao.onmousedown = function(event) {event.preventDefault();};	
    // botao.onmousemove = function(event) {event.preventDefault();};
}
const botaoResposta = document.querySelector('#id_sc_field_btn_resposta');
const botaoSolucao = document.querySelector('#id_sc_field_btn_adicionar_solucao');
configurarBotao(botaoResposta);
configurarBotao(botaoSolucao);

//função adicionar propriedades
function centraliza_botao(conteiner) {
    const styles = {
        display: 'flex',
        flexWrap: 'wrap',
        alignContent: 'center',
        justifyContent: 'center',
        //alignItems: 'center', ou em camelCase ou entre aspas simples
        'align-items': 'center'
    };
    // conteiner = document.querySelector('#id_sc_field_btn_codchamado_<?= {sc_seq_register}; ?>');
    conteiner = document.querySelectorAll('a[id^="id_sc_field_btn_codchamado_"]');
    conteiner.forEach((botao) => {
        for (const style in styles) {
            botao.style[style] = styles[style];
        }
    });
}
window.onload = function() { //só aplica JS depois do DOM totalmente carregado
    centraliza_botao();
}

//manipulando conteúdo
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
Exemplo: document.querySelector('td#Check_All_jornada').parentNode.insertBefore(document.createTextNode('TODOS OS DIAS '), document.querySelector('td#Check_All_jornada'));

//Para manipular elementos de um MODAL, use .PARENT para transitar entre diferentes CONTEXTOS
window.parent.document.querySelector('div#TB_window').style.setProperty('padding', '10px');
window.parent.document.querySelector('div#TB_window').style.setProperty('width', 'auto');
window.parent.document.querySelector('div#TB_window').style.setProperty('height', 'auto');
window.parent.document.querySelector('div#TB_window').style.setProperty('border-radius', '20px');

window.parent.document.querySelector('div#TB_window >#TB_iframeContent').style.setProperty('width', '360');
window.parent.document.querySelector('div#TB_window >#TB_iframeContent').style.setProperty('height', '180');

window.document.querySelector('div#mensagem_sincronizacao').style.setProperty('text-align', 'center');
window.document.querySelector('div#mensagem_sincronizacao').style.setProperty('font-size', 'medium');


//Transformando um NodeList em Array usando SPREAD OPERATOR
/*(No exemplo abaixo, eu precisava usar a função filter() em uma NodeList, porém essa função só está presente em Arrays)
(Minha necessidade era retornar todas as <options> de um <select> com exceção da <option value="4">CANCELADA</option>)*/
[...document.querySelectorAll('#id_sc_field_situacao > option')].filter((option) => option.value != 4)

//capturar elemento <select> com atributo específico (o problema da diferente sintaxe entre o CSS:checked e o JS.selected)
/* 1° opção: */ document.querySelector('#id_sc_field_situacao > option[value="4"]:checked')
/* 2° opção: */ document.querySelector('#id_sc_field_situacao > option[value="4"]').selected



//Usando PROMISES para executar função após término de outra função
function funcao1() { return new Promise(resolve => { /* Lógica da função 1 */ }); }
function funcao2() { /* Lógica da função 1 */ }
funcao1().then(() => { funcao2(); });
/* Exemplo usando função da biblioteca SweetAlert2: */
Swal.fire({text: "Não é permitido assinar esta demanda antes do Diretor responsável!"}).then(
	() => { window.parent.tb_remove(); }
);
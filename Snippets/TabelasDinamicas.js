//REFATORANDO...

//-----------------------------------------------------------------------------------------------------\\
//-------------------------------------- Declaração das variáveis --------------------------------------\\
//-------------------------------------------------------------------------------------------------------\\
let tableRiscos = document.getElementById("idTableRiscos"); //id da tabela
let tableDoencas = document.getElementById("idTableDoencas");
let btnAddRisco = document.getElementById("idBtnAddRisco"); //id do botão
let btnAddDoenca = document.getElementById("idBtnAddDoenca");
let listaRiscos = []; // Uma lista possui um tamanho dinâmico, diferente do vetor que já tem o tamanho pré-determinado na criação
let listaDoencas = [];

//-----------------------------------------------------------------------------------------------------\\
//-------------------------------------- Eventos de monitoramento --------------------------------------\\
//-------------------------------------------------------------------------------------------------------\\

btnAddRisco.addEventListener('click', adicionarRisco); // monitora o clicar do botão
btnAddDoenca.addEventListener('click', adicionarDoenca);

//-----------------------------------------------------------------------------------------------------\\
//-------------------------------------- Funções para CSS ----------------------------------------------\\
//-------------------------------------------------------------------------------------------------------\\

function css(element, style) {  //<---
    for (const property in style)
        element.style[property] = style[property];
}

function aplicaCssBtnAdicionar(element) {  //<---
    css(element, {
        'font-family': "Leelawadee, Ebrima, 'Bahnschrift Light', Gadugi, 'Nirmala UI', 'Segoe UI', Verdana",
        'color': '#fff',
        'font-size': '13px',
        'font-weight': 'normal',
        'text-decoration': 'none',
        'border-width': '1px',
        'border-color': '#0acf97',
        'border-style': 'solid',
        'border-radius': '4px',
        'background-color': '#0acf97',
        'background-image': 'none',
        'box-shadow': '0 2px 6px 0 rgb(10 207 151 / 50%)',
        'filter': 'alpha(opacity=100)',
        'opacity': '1',
        'padding': '9px 12px',
        'cursor': 'pointer',
        'transition': 'all 0.2s'
    });
}

function aplicaCssBtnRemover(element) {
    css(element, {
        'font-family': "Leelawadee, Ebrima, 'Bahnschrift Light', Gadugi, 'Nirmala UI', 'Segoe UI', Verdana",
        'color': '#fff',
        'font-size': ' 13px',
        'font-weight': ' normal',
        'text-decoration': ' none',
        'border-width': ' 1px',
        'border-color': '#fa5c7c',
        'border-style': ' solid',
        'border-radius': ' 4px',
        'background-color': '#fa5c7c',
        'background-image': ' none',
        'box-shadow': '0 2px 6px 0 rgb(250 92 124 / 50%)',
        'filter': 'alpha(opacity=100)',
        'opacity': '1',
        'padding': '9px 12px',
        'cursor': 'pointer',
        'transition': 'all 0.2s'
    });
}

function aplicaCssCabecalho(selector, setWidthCabecalho) { //<---
    document.querySelectorAll(selector).forEach(function (element, index) {
        css(element, {
            'border': '1px solid black',
            'text-align': 'center',
            'background-color': '#eef0f5',
            'background-image': 'none',
            'opacity': '1',
            'filter': 'alpha(opacity=100)',
            'color': '#8492A6',
            'text-decoration': 'none',
            'border-color': '#fff',
            'border-style': 'solid',
            'border-width': '1px',
            'color': '#6c757d',
            'font-family': "Leelawadee, Ebrima, 'Bahnschrift Light', Gadugi, 'Nirmala UI', 'Segoe UI', Verdana",
            'font-size': '13px',
            'font-weight': 'bold',
            'padding': '12px 15px',
            'vertical-align': 'middle'
        });
        setWidthCabecalho(element, index);    //Define o tamanho de acordo com a tabela
    });
}

//-----------------------------------------------------------------------------------------------------\\
//-------------------------------------- Construtor ----------------------------------------------------\\
//-------------------------------------------------------------------------------------------------------\\

tableRiscos.innerHTML = insereCabecalhoRiscos() + insereCorpo('risco');
aplicaCssCabecalho('#idTableRiscos thead tr th', widthTableRiscos);
css(tableRiscos, { 'border-collapse': 'collapse' });
aplicaCssBtnAdicionar(btnAddRisco);

tableDoencas.innerHTML = insereCabecalhoDoencas() + insereCorpo('doenca');
aplicaCssCabecalho('#idTableDoencas thead tr th', widthTableDoencas);
css(tableDoencas, { 'border-collapse': 'collapse' });
aplicaCssBtnAdicionar(btnAddDoenca);

listar('id_corpo_tabela_risco', listaRiscos, removeRisco, 'modeloRisco'); //chama essa função para, ao carregar a página, já apresente a descrição mesmo que o objeto esteja vazio
listar('id_corpo_tabela_doenca', listaDoencas, removeDoenca, 'modeloDoenca');

//-----------------------------------------------------------------------------------------------------\\
//-------------------------------------- Implementação das funções -------------------------------------\\
//-------------------------------------------------------------------------------------------------------\\
function insereCabecalhoRiscos() { //<---
    return '<thead>'
        + '<tr>'
        + '<th>#</th>'
        + '<th>TIPO</th>'
        + '<th>DESCRIÇÃO</th>'
        + '<th></th>'
        + '</tr>'
        + '</thead>';
}

function insereCabecalhoDoencas() {
    return '<thead>'
        + '<tr>'
        + '<th>#</th>'
        + '<th>DOENÇA</th>'
        + '<th></th>'
        + '</tr>'
        + '</thead>';
}

function insereCorpo(type) { //<--- receberá como parâmetro: "risco" ou "doenca" para complementar o id do <tbody>
    return `<tbody id="id_corpo_tabela_${type}">`
        + '</tbody>';
}

function widthTableRiscos(element, index) {    //Define o tamanho da coluna de acordo com o elemento
    switch (index) {
        case 0: css(element, { 'width': '10%' }); break;
        case 1: css(element, { 'width': '25%' }); break;
        case 2: css(element, { 'width': '65%' }); break;
        default: css(element, { 'width': '10%' }); break;
    }
}

function widthTableDoencas(element, index) {
    switch (index) {
        case 0: css(element, { 'width': '10%' }); break;
        case 1: css(element, { 'width': '90%' }); break;
        default: css(element, { 'width': '90%' }); break;
    }
}

function linhaSemResultado(colspan, conteudo = 'Sem resultados') { // cria uma linha mesclando as colunas para centralizar a descrição
    return '<tr>'
        + `<td colspan="${colspan}" style="text-align: center;padding: 5px 0;">${conteudo}</td>`
        + '</tr>';
}

function limparCamposRiscos() {
    document.getElementById('id_sc_field_tiporisco').value = '';
    document.getElementById('id_sc_field_descricao_risco').value = '';

    $('#id_sc_field_tiporisco').change(); //força a mudança do valor
    $('#id_sc_field_descricao_risco').change();
}

function limparCamposDoencas() {
    document.getElementById('id_sc_field_riscodoenca').value = '';
    $('#id_sc_field_riscodoenca').change();
}

function adicionarRisco() {
    let riscoElement = document.getElementById('id_sc_field_descricao_risco');

    let tipoRisco = document.getElementById('id_sc_field_tiporisco').value;	//id do campo select, encontrado no DevTools
    console.log(tipoRisco);
    let valorRisco = riscoElement.value;
    console.log(valorRisco);
    let descRisco = riscoElement.options[riscoElement.options.selectedIndex].text;
    console.log(descRisco);

    // Validações
    if (valorRisco == '') {
        alert('É necessário selecionar um risco ocupacional!');
        return false;
    }
    if (verificaJaAdicionado(listaRiscos, 'risco', valorRisco)) {
        alert('Atenção! Este risco já foi adicionado.');
        return false;
    }
    
    let objetoRisco = {
        'tipo': tipoRisco,  //físico, químico, biológico, ergonômico, acidente
        'risco': valorRisco,
        'descricao': descRisco
    }

    listaRiscos.push(objetoRisco);
    // console.log(objetoRisco);
    // 4 parâmetros: idElementoTabela,listaValores,callbackRemoveLinha,formatoTabela
    listar('id_corpo_tabela_risco', listaRiscos, removeRisco, 'modeloRisco');
    document.getElementById('id_sc_field_datatableriscos').value = JSON.stringify(listaRiscos); // converte a lista para uma string JSON e a armazena no campo oculto da tabela
    limparCamposRiscos();
}

function adicionarDoenca() {
    let doenca = document.getElementById('id_sc_field_riscodoenca').value; //cuidado! pois na conversão para elemento DOM, o id fica lowcase

    if (doenca == '') {
        alert('É necessário selecionar uma doença ocupacional!');
        return false;
    }
    if (verificaJaAdicionado(listaDoencas, 'doenca', doenca)) {
        alert('Atenção! Esta doença já foi adicionada.');
        return false;
    }

    let objetoDoenca = {
        'doenca': doenca
    };

    listaDoencas.push(objetoDoenca);
    // console.log(objetoDoenca);
    // 4 parâmetros:    idElement, 		 listData,    removeFunction, 	  type
    listar('id_corpo_tabela_doenca', listaDoencas, removeDoenca, 'modeloDoenca');
    document.getElementById('id_sc_field_datatabledoencas').value = JSON.stringify(listaDoencas);
    limparCamposDoencas();
}

function verificaJaAdicionado(lista, chave, valor) {
    let adicionado = false;
    lista.forEach(function (lista) {
        if (lista[chave] == valor) {
            adicionado = true;
        }
    });
    return adicionado;
}

function removeRisco(key) { //<---
    listaRiscos.splice(key, 1); //altera o conteúdo de uma lista, adicionando novos elementos enquanto remove elementos antigos.
    document.getElementById('id_sc_field_datatableriscos').value = JSON.stringify(listaRiscos); //converte o elemento para uma string
    // 4 parâmetros:    idElement, 		listData, 	  removeFunction, 	  type
    listar('id_corpo_tabela_risco', listaRiscos, removeRisco, 'modeloRisco');
}

function removeDoenca(key) {
    listaDoencas.splice(key, 1);
    document.getElementById('id_sc_field_datatabledoencas').value = JSON.stringify(listaDoencas);
    // 4 parâmetros:    idElement, 		   listData, 	   removeFunction,     type
    listar('id_corpo_tabela_doenca', listaDoencas, removeDoenca, 'modeloDoenca');
}

function getText(campoSelect, valor) {  //<-- faz a validação dos campos antes de pegar o valor
    switch (campoSelect) {
        case 'tipo':
            return (valor == '' || valor == null || (typeof valor === 'undefined')) ? '-' : getSelectText('id_sc_field_tiporisco', valor); // em vez de apresentar o id, chama a função que retorna a descrição (lookup)
        // case 'risco':
        //     return (valor == '' || valor == null || (typeof valor === 'undefined')) ? '-' : getSelectText('id_sc_field_descricao_risco', valor);
        case 'doenca':
            return (valor == '' || valor == null || (typeof valor === 'undefined')) ? '-' : getSelectText('id_sc_field_riscodoenca', valor);
        default:
            return (valor === '' || valor == null || (typeof valor === 'undefined')) ? '-' : valor; //se o campo já apresenta texto, então só mostra sua string
    }
}

function getSelectText(idCampo, valor) {  //<--- (LOOKUP) compara os valores ids e apresenta a descrição no campo select
    let descricao = '';
    let select = document.getElementById(idCampo);
    for (let i = 0; i <= select.options.length; i++) {
        if (select.options[i].value == valor) {
            descricao = select.options[i].text;
            break;
        }
    }
    return descricao;
}

function armazenaDadosList(idElement) {  //<--- ANALISAR DEPOIS
    let cmpDados = document.getElementById(idElement);
    if (cmpDados.value != '') {

        cmpDados.value = decodeURIComponent(cmpDados.value);
        let dadosCmp = JSON.parse(cmpDados.value);
        if (Array.isArray(dadosCmp)) {
            return dadosCmp;
        }
    }

    return [];
}

// 4 parâmetros: id_tbody, lista_dados, funcao_remover, modelo_tabela		                exemplos parametros: id_corpo_tabela_risco, listaRiscos, removeRisco, modeloRisco
function listar(idElementoTabela, listaValores, callbackRemoveLinha, formatoTabela) {

    let elementoTbody = document.getElementById(idElementoTabela);
    elementoTbody.innerHTML = ''; //limpa tabela

    if (listaValores.length > 0) {

        let cssLinha = {
            //Centraliza campos da Tabela Riscos
            'tipo': { 'text-align': 'center' },
            'risco': { 'text-align': 'center' },
            //Centraliza campos da Tabela Doencas
            'doenca': { 'text-align': 'center' },
        };
        
        listaValores.forEach(function (cadaValorDaLista, posicaoDoValor) {
            //Validação: caso a tabela seja 'modeloRisco', o valor do objeto, na chave 'risco', recebe .descricao
            let objTemporario = cadaValorDaLista;
            if(formatoTabela == 'modeloRisco'){
                objTemporario = {
                    'tipo': cadaValorDaLista.tipo,
                    'risco': cadaValorDaLista.descricao
                };
            }
            
            elementoTbody.appendChild(adicionarLinhaTabela(objTemporario, posicaoDoValor, cssLinha, callbackRemoveLinha)); // insere a linha<tr> dentro da tabela<tbody>
        });

    } else {
        colspan = (formatoTabela == 'modeloRisco') ? 4 : colspan; // prepara o parâmetro antes de ser chamado pela função linhaSemResultado()
        colspan = (formatoTabela == 'modeloDoenca') ? 3 : colspan;

        conteudo = (formatoTabela == 'modeloRisco') ? 'Sem riscos específicos' : '';
        conteudo = (formatoTabela == 'modeloDoenca') ? 'Sem Doenças específicas' : conteudo;

        elementoTbody.innerHTML = (conteudo == '') ? linhaSemResultado(colspan) : linhaSemResultado(colspan, conteudo); //o retorno dessa função é uma linha<tr> com uma pré-determinada quantidade de colunas (para apresentar a descrição de forma centralizada)
    }
}

/**
 * @param {*} cadaValorDaLista equivale a 1 objeto, contendo os pares chave/valor correspondentes ao campo selecionado
 * @param {*} posicaoDoValor index 
 * @param {*} cssLinha css dos campos
 * @param {*} callbackRemoveLinha
 * @returns retorna o tr condensado com todas as informações da linha adicionada
 */
function adicionarLinhaTabela(cadaValorDaLista, posicaoDoValor, cssLinha, callbackRemoveLinha) {
    let keyField = document.createElement('td'); // cria um <td>
    keyField.appendChild(document.createTextNode(posicaoDoValor));	// coloca uma folha(TextNode) dentro da <td>
    css(keyField, { 'text-align': 'center' });

    let linha = document.createElement('tr'); // cria uma linha<tr>
    css(linha, { 'border-bottom': '1px solid #d0d3d7' });
    linha.appendChild(keyField); // coloca o <td> dentro da linha<tr>

    let exceptionProperty = [/*'epcEpi'*/];

    for (let property in cadaValorDaLista) { //itera lista para jogar cada valor dentro das <td>
        if (cadaValorDaLista.hasOwnProperty(property) && !exceptionProperty.includes(property)) {//valida se o objeto dentro da lista não está vazio (se tem alguma propriedade 'chave/valor')
            let field = document.createElement('td'); //cria <td>
            field.appendChild( //adiciona à essa <td> uma filha...
                document.createTextNode( //cria uma "folha"(TextNode)
                    getText(property, cadaValorDaLista[property])
                )
            );
            linha.appendChild(field); //linha = <tr>   -> adiciona os <td> dentro da <tr>

            if (cssLinha.hasOwnProperty(property)) {
                css(field, cssLinha[property]);
            }

            if (cadaValorDaLista[property] == '') { //verifica se o valor dentro do <td> está vazio, se sim, aplica CSS para centralizar
                css(field, { 'text-align': 'center' });
            }
        }
    }

    let tdBtnRemover = document.createElement('td'); //cria um <td>
    let btnRemover = document.createElement('button'); //cria um botao
    btnRemover.setAttribute('type', 'button'); //por garantia, certifica que é um botão!  kkk
    btnRemover.addEventListener("click", function () {  //monitora esse botão
        callbackRemoveLinha(posicaoDoValor); //$@P0R@ é uma callback!
    });
    aplicaCssBtnRemover(btnRemover);
    btnRemover.appendChild(document.createTextNode('Remover')); //coloca uma descrição pra esse botão
    tdBtnRemover.appendChild(btnRemover); //coloca dentro do <td> (ou seja, o botão ficará dentro da coluna)
    css(tdBtnRemover, { 'text-align': 'center' }); //centraliza o botão na coluna
    linha.appendChild(tdBtnRemover); //a linha<tr> recebe o button
    return linha;
}
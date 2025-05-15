//Exemplo mais recente e mais simples
function aplicarMascara(elemento) {
	let valorPuro = elemento.value.replace(/([^0-9])+/g, ""); /* remove qualquer caractere nao numerico */

	if (valorPuro.length === 11) { //CPF
		elemento.value = valorPuro.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
	} else if (valorPuro.length === 14) { //CNPJ
		elemento.value = valorPuro.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
	} else {
		elemento.value = valorPuro;
	}
}

//**********************************************Outro exemplo mais efetivo*************************************/
function formatarDocumento(somenteDigitos) {
	const CPF = 11;
	const CNPJ = 14;
	const valorTruncado = somenteDigitos.slice(0, CNPJ);

	if (valorTruncado.length <= CPF) {
		return valorTruncado
			.replace(/^(\d{3})(\d)/, '$1.$2')
			.replace(/^(\d{3})\.(\d{3})(\d)/, '$1.$2.$3')
			.replace(/^(\d{3})\.(\d{3})\.(\d{3})(\d{1,2})/, '$1.$2.$3-$4');
	} else {
		return valorTruncado
			.replace(/^(\d{2})(\d)/, '$1.$2')
			.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3')
			.replace(/^(\d{2})\.(\d{3})\.(\d{3})(\d)/, '$1.$2.$3/$4')
			.replace(/^(\d{2})\.(\d{3})\.(\d{3})\/(\d{4})(\d{1,2})/, '$1.$2.$3/$4-$5');
	}
}

function aplicarMascaraUnico(elemento) {
	const somenteDigitos = elemento.value.replace(/\D/g, '');
	elemento.value = formatarDocumento(somenteDigitos);
}

function aplicarMascaraMultiplos(event) {
	const elemento = event.target;
	const linhas = elemento.value.split('\n');

	const linhasFormatadas = linhas.map(linha => {
		const somenteDigitos = linha.replace(/\D/g, '');
		return formatarDocumento(somenteDigitos);
	});

	elemento.value = linhasFormatadas.join('\n');
}
//************************************************************************************************* */

/*########################################################################################################################################
################################################ APLICANDO MASCARAS USANDO JAVASCRIPT PURO ###############################################
########################################################################################################################################*/
{/* <input id="telefoneInput" name="telefone" class="fonte14c" type="text" autocomplete="on" pattern="/^\(?[1-9]{2}\)? ?(?:[2-8]|9 ?[1-9])[0-9]{3}\-?[0-9]{4}$/" required placeholder="(xx) x xxxx-xxxx" size="16" maxlength="11" oninput="criarMascara('telefone')" value=""> */}
// ? importante que o atributo id seja nomeado com final '...Input'
// o par?metro passado na fun??o criarMascara() deve ser igual ? chave do objeto mascaras{}

/*Essa fun??o ? chamada SEMPRE que o input ? alterado, mas ela somente far? algo quando o tamanho do input for igual ? propriedade maxLength.*/
function criarMascara(mascaraInput) {
	elemento = document.getElementById(`${mascaraInput}Input`);
	let valorInput = elemento.value;
	let valorPuro = valorInput.replace(/([^0-9])+/g, '');
	let tamanhoAtual = valorPuro.length;
	const maximoInput = elemento.maxLength;

	const mascaras = {
		cpf: valorInput.replace(/[^\d]/g, "").replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4"),
		/** Gra?as ?s REGExp implementada em cada fun??o, o primeiro replace remover? todos os caracteres n?o-num?ricos. O segundo aplicar? os pontos ap?s cada grupo de tr?s n?meros e, em seguida, um tra?o antes dos dois ?ltimos n?meros. */
		cep: valorInput.replace(/[^\d]/g, "").replace(/(\d{2})(\d{3})(\d{3})/, "$1.$2-$3"),
		// telefone: valorInput.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{4,5})([0-9]{4})/, "($1) $2-$3"),
		telefone: (nrTelefone) => nrTelefone.replace(/[^\d]/g, "").replace(/^(\d{2})([2-8])(\d{3})(\d{4})/, "($1) $2$3-$4"),
		celular: (nrCelular) => nrCelular.replace(/[^\d]/g, "").replace(/^(\d{2})([9])(\d{4})(\d{4})/, "($1) $2 $3-$4"),
		CNJ: valorInput.replace(/[^\d]/g, "").replace(/(\d{7})(\d{2})(\d{4})(\d{1})(\d{2})(\d{4})/, "$1-$2.$3.$4.$5.$6"),
	};
	
	if (mascaraInput == 'telefone') {
		let isCell = /^\d{2}9/.test(valorPuro); //verifica se ? um n?mero de celular
		elemento.setAttribute('maxLength', isCell ? '16' : '14');
		elemento.value = isCell ? mascaras.celular(valorPuro) : mascaras.telefone(valorPuro);
		// let valorTelCel = (valorPuro.length > (isCell ? 11 : 10)) ? valorPuro.slice(0, (isCell ? 11 : 10)) : valorPuro;
		// elemento.value = isCell ? mascaras.celular(valorTelCel) : mascaras.telefone(valorTelCel);
	} else {
		tamanhoAtual === maximoInput ? elemento.value = mascaras[mascaraInput] : elemento.value = valorPuro;
	}
};




/*########################################################################################################################################
#################################################### APLICANDO MASCARAS USANDO JQUERY ####################################################
########################################################################################################################################*/
{/* <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script> */}
$(document).ready(function() {
	var SPMaskBehavior = function(val) {
			return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009'; // o n? 9 no final torna o ?ltimo d?gito opcional
		};
		spOptions = {
			onKeyPress: function(val, e, field, options) { //warning: onKeyPress is deprecated, but change by onKeyDown doesn't work here.
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			}
		};

	$('#cdc').mask('099999999');
	$('#cepInput').mask('00.000-000');
	$('#cpfInput').mask('000.000.000-00', {reverse: true});
	$('#telefoneInput').mask(SPMaskBehavior, spOptions);
});
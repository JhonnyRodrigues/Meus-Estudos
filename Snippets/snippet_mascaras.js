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

/*########################################################################################################################################
################################################ APLICANDO MASCARAS USANDO JAVASCRIPT PURO ###############################################
########################################################################################################################################*/
{/* <input id="telefoneInput" name="telefone" class="fonte14c" type="text" autocomplete="on" pattern="/^\(?[1-9]{2}\)? ?(?:[2-8]|9 ?[1-9])[0-9]{3}\-?[0-9]{4}$/" required placeholder="(xx) x xxxx-xxxx" size="16" maxlength="11" oninput="criarMascara('telefone')" value=""> */}
// é importante que o atributo id seja nomeado com final '...Input'
// o parâmetro passado na função criarMascara() deve ser igual à chave do objeto mascaras{}

function criarMascara(mascaraInput) {
	/** A função é chamada SEMPRE que o input é alterado, mas ela somente fará algo quando o tamanho do input for igual à propriedade maxLength.*/
	elemento = document.getElementById(`${mascaraInput}Input`);
	let valorInput = elemento.value;
	let valorPuro = valorInput.replace(/([^0-9])+/g, "");
	/** a variável valorPuro nada mais é do que uma substituição de todos os caracteres não numéricos por nada - na prática, ela remove qualquer coisa que não seja um número */
	let tamanhoAtual = valorPuro.length;
	const maximoInput = elemento.maxLength;

	const mascaras = {
		cpf: valorInput.replace(/[^\d]/g, "").replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4"),
		/** Graças às REGExp implementada em cada função, o primeiro replace removerá todos os caracteres não numéricos. O segundo aplicará os pontos após cada grupo de três números e, em seguida, um traço antes dos dois últimos números. */
		cep: valorInput.replace(/[^\d]/g, "").replace(/(\d{2})(\d{3})(\d{3})/, "$1.$2-$3"),
		// telefone: valorInput.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{4,5})([0-9]{4})/, "($1) $2-$3"),
		telefone: (nrTelefone) => nrTelefone.replace(/[^\d]/g, "").replace(/^(\d{2})([2-8])(\d{3})(\d{4})/, "($1) $2$3-$4"),
		celular: (nrCelular) => nrCelular.replace(/[^\d]/g, "").replace(/^(\d{2})([9])(\d{4})(\d{4})/, "($1) $2 $3-$4"),
		CNJ: valorInput.replace(/[^\d]/g, "").replace(/(\d{7})(\d{2})(\d{4})(\d{1})(\d{2})(\d{4})/, "$1-$2.$3.$4.$5.$6"),
	};
	
	if (mascaraInput == 'telefone') {
		let isCell = /^\d{2}9/.test(valorPuro); //verifica se é um número de celular
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
			return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009'; // o nº 9 no final torna o último dígito opcional
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
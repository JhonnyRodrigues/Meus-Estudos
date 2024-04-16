function validarFormulario(form) {
	let valorTipo = document.querySelector('input[name="tipo"]').value;
	let valorMensagem = document.querySelector('input[name="mensagem"]').value;
	let valorNome = document.querySelector('input[name="nome"]').value;
	let valorCpf = document.querySelector('input[name="cpf"]').value;
	let valorCdc = document.querySelector('input[name="cdc"]').value;
	let valorEndereco = document.querySelector('input[name="endereco"]').value;
	let valorCidade = document.querySelector('input[name="cidade"]').value;
	let valorUF = document.querySelector('select[name="uf"]').value;
	let valorCep = document.querySelector('input[name="cep"]').value;
	let valorEmail = document.querySelector('input[name="email"]').value;
	let valorTelefone = document.querySelector('input[name="telefone"]').value;

	const regexNome = /^[A-Za-z\xc1\xc2\xc3\xe0\xe1\xe2\xe3\xc9\xca\xe9\xea\xcd\xed\xd3\xd4\xd5\xf3\xf4\xf5\xda\xfa\xc7\xe7\xd1\xf1\-\s]+$/;
	const regexCPF = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
	const regexTelefone = /^\(?\d{2}\)?\s?(?:[2-8]|9\s?[1-9])[0-9]{3}-?[0-9]{4}$/;

	if (valorNome == '') {
		alert("Por favor, preencha o campo Nome!");
		document.querySelector('input[name="nome"]').focus();
		return false;
	}
	if (!regexNome.test(valorNome)) {			
		alert("Por favor, insira um nome v\xe1lido!");
		document.querySelector('input[name="nome"]').focus();
		return false;
	}

	if (valorCpf == '') {
		alert("Por favor, preencha o campo CPF!");
		document.querySelector('input[name="cpf"]').focus();
		return false;
	}
	if (!regexCPF.test(valorCpf)) {			
		alert("Por favor, insira um CPF v\xe1lido!");
		document.querySelector('input[name="cpf"]').focus();
		return false;
	}
	if (validarCPF(valorCpf) == false) {
		alert("O CPF digitado n\xE3o \xE9 v\xe1lido!");
		document.querySelector('input[name="cpf"]').focus();
		return false;
	}

	if (valorEndereco == '') {
		alert("Por favor, preencha o campo Endere\xE7o!");
		document.querySelector('input[name="endereco"]').focus();
		return false;
	}

	if (valorCidade == '') {
		alert("Por favor, preencha o campo Cidade!");
		document.querySelector('input[name="cidade"]').focus();
		return false;
	}

	if (valorUF == '') {
		alert("Por favor, preencha o campo Estado!");
		document.querySelector('input[name="uf"]').focus();
		return false;
	}

	if (valorCep == '') {
		alert("Por favor, preencha o campo CEP!");
		document.querySelector('input[name="cep"]').focus();
		return false;
	}

	if (valorEmail == '') {
		alert("Por favor, preencha o campo E-mail!");
		document.querySelector('input[name="email"]').focus();
		return false;
	}

	if (valorTelefone == '') {
		alert("Por favor, preencha o campo Telefone!");
		document.querySelector('input[name="telefone"]').focus();
		return false;
	}
	if (!regexTelefone.test(valorTelefone)) {			
		alert("Por favor, insira um telefone v\xe1lido!");
		document.querySelector('input[name="telefone"]').focus();
		return false;
	}

	if (valorTipo == '') {
		alert("Por favor, selecione o Tipo de Contato!");
		document.querySelector('input[name="tipo"]').focus();
		return false;
	}

	if (valorMensagem == '') {
		alert("Por favor, preencha o campo Mensagem!");
		document.querySelector('input[name="mensagem"]').focus();
		return false;
	}
}

//#################################################
/*A funcao acima pode ser melhor substituida por:*/
//#################################################

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

function verificarDocumento(elemento) { //messe caso, um único campo armazenava tanto CPF quanto CNPJ
	documento = elemento.value.replace(/([^0-9])+/g, "");
	if (documento.length < 12) {
		if (!validarCPF(documento)) {
			alert("CPF inválido!\nPor favor, verifique os números digitados.");
			elemento.value = '';
		}
	} else {
		if (!validarCNPJ(documento)) {
			alert("CNPJ inválido!\nPor favor, verifique os números digitados.");
			elemento.value = '';
		}			
	}
}

function validarCPF(cpf) {
	var soma = 0;
	var resto;
	var cpfPuro = cpf.replace(/([^0-9])+/g, "");

	if (/^([0]{11}|[1]{11}|[2]{11}|[3]{11}|[4]{11}|[5]{11}|[6]{11}|[7]{11}|[8]{11}|[9]{11})$/.test(cpfPuro)) return false;

	for (i = 1; i <= 9; i++) soma = soma + parseInt(cpfPuro.substring(i - 1, i)) * (11 - i);
	resto = (soma * 10) % 11;

	if ((resto == 10) || (resto == 11)) resto = 0;
	if (resto != parseInt(cpfPuro.substring(9, 10))) return false;

	soma = 0;
	for (i = 1; i <= 10; i++) soma = soma + parseInt(cpfPuro.substring(i - 1, i)) * (12 - i);
	resto = (soma * 10) % 11;

	if ((resto == 10) || (resto == 11)) resto = 0;
	if (resto != parseInt(cpfPuro.substring(10, 11))) return false;
	return true;
}

function validarCNPJ(cnpj) {
	cnpj = cnpj.replace(/[^\d]+/g,'');

	if (cnpj == '') return false;
	if (cnpj.length != 14) return false;

	// Elimina CNPJs invalidos conhecidos
	if (cnpj == "00000000000000" || 
		cnpj == "11111111111111" || 
		cnpj == "22222222222222" || 
		cnpj == "33333333333333" || 
		cnpj == "44444444444444" || 
		cnpj == "55555555555555" || 
		cnpj == "66666666666666" || 
		cnpj == "77777777777777" || 
		cnpj == "88888888888888" || 
		cnpj == "99999999999999")
	return false;
		
	// Valida DVs
	tamanho = cnpj.length - 2
	numeros = cnpj.substring(0,tamanho);
	digitos = cnpj.substring(tamanho);
	soma = 0;
	pos = tamanho - 7;
	for (i = tamanho; i >= 1; i--) {
	soma += numeros.charAt(tamanho - i) * pos--;
	if (pos < 2)
			pos = 9;
	}
	resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
	if (resultado != digitos.charAt(0))
		return false;
		
	tamanho = tamanho + 1;
	numeros = cnpj.substring(0,tamanho);
	soma = 0;
	pos = tamanho - 7;
	for (i = tamanho; i >= 1; i--) {
	soma += numeros.charAt(tamanho - i) * pos--;
	if (pos < 2)
			pos = 9;
	}
	resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
	if (resultado != digitos.charAt(1))
		return false;
		
	return true;
}

function validarFormulario() {
	let camposVazios = [];
	document.querySelectorAll('select[required]').forEach((el) => {
		if(el.value == '') {
			el.parentElement.querySelector('input').classList.add('invalid'); //adiciona classe da lib materialize para deixar elemento vermelho
			camposVazios.push(el.parentElement.parentElement.querySelector('label').textContent.trim()); //captura o label do campo vazio
		}
	})
	if(camposVazios.length > 0) {
		M.toast({html: `Por favor, selecione um valor para o campo ${camposVazios.join(', ')}.`}); //funcao join JS equivale a explode PHP
	}
	
	return camposVazios.length == 0; //so retorna false se houver campos vazios
}

function submitForm(event) {
	if (!validarFormulario()) {
		return false;
	}

	const formulario = document.querySelector('form');
	if (!formulario.checkValidity()) {
		formulario.reportValidity(); //funcao JS nativa que reporta os problemas na interface (baloes)
		return false;
	}

	formulario.submit();

	//DEBUG:
	// document.querySelectorAll('input[id^="v"]').forEach((el) => {
	//     console.log(el.name, el.value); //printa todos os valores
	// });
	// event.preventDefault(); // impede o envio de dados do formulário
}

document.querySelector('#btSubmit').addEventListener('click', submitForm);
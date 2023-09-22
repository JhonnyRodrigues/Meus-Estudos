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
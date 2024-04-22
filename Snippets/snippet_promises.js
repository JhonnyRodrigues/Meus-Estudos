// const email = window.prompt("Insira o endereço de e-mail para ser enviado o teste");

Swal.fire({
	title: 'Insira o endereço de e-mail para ser enviado o teste',
	input: 'email',
	confirmButtonText: 'Enviar',
	cancelButtonText: 'Cancelar',
	showCancelButton: true,
	validationMessage: "endereço de e-mail válido!",
})
.then((result) => {
	if (result.hasOwnProperty('value') && result.value.trim() !== '') {
    	const email = result.value;
		
		// Configurações da request
		var requestOptions = {
			method: 'POST', //verbo HTTP
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded' // Tipo de conteúdo da request
			},
			body: 'email=' + encodeURIComponent(email) // Dados a serem enviados para o PHP (no formato de parâmetros de consulta)
		};
		
		document.querySelector('#loading_enviar_email').showModal();
		
		// Enviar a solicitação usando a interface moderna Fetch API como uma alternativa ao antigo método XMLHttpRequest
		fetch('../SISTEMA_TESTAR_ENVIO_EMAILS_B/index.php', requestOptions) //o retorno dessa função é uma Promise
		.then(response => {
			if (!response.ok) {
				throw new Error('Ocorreu um erro na solicitação AJAX');
			}
			// return response.text(); // Retornar os dados enviados pelo PHP no formato texto
			return response.json(); // o método json() retorna uma Promise que, após análise de uma string JSON, vira um objeto.
		})
		// .then(() => {
		// 	return new Promise((resolve, ) => setTimeout(() => resolve({enviado: true, mensagem: 'testando o SVG loading'}), 15000));
		// })
		.then(data => { // Se o processamento do arquivo for bem-sucedido, faça algo com essa resposta do PHP			
			console.log("Resposta do PHP:", data);
		document.querySelector('#loading_enviar_email').close();
			
			return Swal.fire({
				type: (data.enviado) ? 'success' : 'error',
				title: (data.enviado) ? 'Sucesso!' : 'Não enviado!',
				text: data.mensagem
			});
		})
		.then( () => {
			location.reload();
		})
		.catch(error => {
			document.querySelector('#loading_enviar_email').close();
			// Se ocorrer um erro na solicitação AJAX, trate-o aqui
			console.error("Não foi possível processar a solicitação AJAX:", error);
			Swal.fire({
				type: 'error',
				title: 'Não enviado!',
				text: error
			})
			.then(() => {
				return new Promise((resolve, ) => resolve('Você percebeu?'));
			})
			.then( (teste) => {
				alert(teste);
			});
		});
	}
});



<style>
	dialog#loading_enviar_email {
		width: 30vh;
		height: 30vh;
		border: none;
		background: transparent;
		overflow: hidden;
		outline: none;
	}
	
	dialog#loading_enviar_email::backdrop {
		background: #020202;
		opacity: 0.4;
	}
	
	svg {
		width: 100px;
		height: 100px;
		margin: 20px;
		display:inline-block;
	}
</style>

<dialog id="loading_enviar_email">
	<svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
		<path fill="#f00" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
	  c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
			<animateTransform 
				attributeName="transform" 
				attributeType="XML" 
				type="rotate"
				dur="2s" 
				from="0 50 50"
				to="360 50 50" 
				repeatCount="indefinite"
			/>
		</path>
		<path fill="#0f0" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7 c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
			<animateTransform 
				attributeName="transform" 
				attributeType="XML" 
				type="rotate"
				dur="1s" 
				from="0 50 50"
				to="-360 50 50" 
				repeatCount="indefinite"
			/>
		</path>
		<path fill="#00f" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5 L82,35.7z">
			<animateTransform 
			attributeName="transform" 
			attributeType="XML" 
			type="rotate"
			dur="2s" 
			from="0 50 50"
			to="360 50 50" 
			repeatCount="indefinite"
			/>
		</path>
	</svg>
</dialog>
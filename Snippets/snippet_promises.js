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
		// .then(() => { //só para testar a visualização do loading
		// 	return new Promise((resolve, ) => setTimeout(() => resolve({enviado: true, mensagem: 'mostrei o loading'}), 10000));
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
	#sc_b_new_top,
	#pesq_top,
	#sc_testar_envio_email_top,
	#f_sel_sub_gb,
	#f_sel_sub_sel,
	#sai_top,
	#Bsair,
	#sc_b_sai_top {
		color: ivory;
	}
	#sel_groupby_top,
	#selcmp_top,
	#ordcmp_top,
	#sc_btgp_btn_group_1_top,
	#res_top,
	#reload_top,
	#Rrotac_top,
	#Rconfig_top,
	#Brestore_sel,
	#Brestore_gb,
	#f_sel_sub_sel,
	#Rsai_top,
	#Bsair_gb,
	#Rgraf_top {
		color: black;
	}
	
    .circular-loader {
        -webkit-animation: rotate 2s linear infinite;
        animation: rotate 2s linear infinite;
        height: 100%;
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        margin: auto;
    }

    .loader-path {
        stroke-dasharray: 150, 200;
        stroke-dashoffset: -10;
        -webkit-animation: dash 1.5s ease-in-out infinite, color 6s ease-in-out infinite;
        animation: dash 1.5s ease-in-out infinite, color 6s ease-in-out infinite;
        stroke-linecap: round;
    }

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

    @-webkit-keyframes rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @-webkit-keyframes dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -35;
        }

        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -124;
        }
    }

    @keyframes dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
        }

        50% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -35;
        }

        100% {
            stroke-dasharray: 89, 200;
            stroke-dashoffset: -124;
        }
    }

    @-webkit-keyframes color {
        0% {
            stroke: #70c542;
        }

        40% {
            stroke: #70c542;
        }

        66% {
            stroke: #70c542;
        }

        80%,
        90% {
            stroke: #70c542;
        }
    }

    @keyframes color {
        0% {
            stroke: #727cf5;
        }

        40% {
            stroke: #727cf5;
        }

        66% {
            stroke: #727cf5;
        }

        80%,
        90% {
            stroke: #727cf5;
        }
    }
</style>

<dialog id="loading_enviar_email">
	<svg class="circular-loader" viewBox="25 25 50 50">
		<circle class="loader-path" cx="50" cy="50" r="20" fill="none" stroke="#727cf5" stroke-width="3" />
	</svg>
</dialog>
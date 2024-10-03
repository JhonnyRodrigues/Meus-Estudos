<?php
error_reporting(E_ALL ^ E_NOTICE);

if ((isset($_GET['checkPing']) && $_GET['checkPing'] == true) || (isset($_POST['checkPing']) && $_POST['checkPing'] == true)) {
    #GET
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['ip'])) {
            $ip = escapeshellarg($_GET['ip']);
        }
    #POST
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['ip'])) {
            $ip = escapeshellarg($_POST['ip']);
        }
    }
    #LINUX
    if (strtolower(php_uname('s')) == 'linux') {
        $retorno = shell_exec("ping $ip -c 2");
        if (!strstr($retorno, "2 received")) {
            echo '{"ping": "offline"}';
        } else {
            $aTempo = explode("/", $retorno);
            echo '{"ping": "' . $aTempo[4] . ' ms"}'; //(avg)tempo médio de resposta dos pacotes enviados
        }
    #WINDOWS
    } else {
        $retorno = shell_exec("ping $ip -n 2");
        if (!preg_match('/ecebidos = 2|2 received/', $retorno)) {
            echo '{"ping": "offline"}';
        } else {
            $pattern = '/dia\s*=\s*(\d+ms)/i'; //(Média) tempo médio de resposta dos pacotes enviados
            preg_match($pattern, $retorno, $matches);
            if (isset($matches[1])) {
				echo '{"ping": "' . $matches[1] . ' ms"}';
            } else {
                exit("falha ao detectar valor de retorno do ping");
            }
        }
    }
	
    exit;
}

$enlaces = array();
$queryEnlaces = "
	SELECT
		IP_ANTENA_EMISSORA,
		IP_ANTENA_RECEPTORA,
		ENLACE,
		OBSERVACOES
	FROM
		TI_EQUIPAMENTOS_ENLACE_ANTENAS
	WHERE
		ATIVO = 'S'
";
sc_select(datasetEnlaces, $queryEnlaces);
if ({datasetEnlaces} === null || {datasetEnlaces} === false || {datasetEnlaces}->_numOfRows < 1) {
	errorMessage("Falha ao consultar cadastro de enlaces das antenas.", 1);
} else {
	while (!{datasetEnlaces}->EOF) {
		$enlaces[{datasetEnlaces}->fields['ENLACE']] = array(
			'ip_antena_emissora' => mb_convert_encoding({datasetEnlaces}->fields['IP_ANTENA_EMISSORA'], 'iso-8859-1', 'utf-8'),
			'ip_antena_receptora' => mb_convert_encoding({datasetEnlaces}->fields['IP_ANTENA_RECEPTORA'], 'iso-8859-1', 'utf-8'),
			'observacoes' => mb_convert_encoding({datasetEnlaces}->fields['OBSERVACOES'], 'iso-8859-1', 'utf-8'),
			'ping_antena_emissora' => '',
			'ping_antena_receptora' => ''
		);
		{datasetEnlaces}->MoveNext();
	}
	{datasetEnlaces}->Close();
}

$objEnlaces = json_encode($enlaces);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapeamento enlaces antenas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        img,
        svg {
            width: 1200px;
            position: absolute;
        }

        svg {
            height: 848px;
        }
		
		.processing {
			fill: lightgray;
		}
		
		.partially {
			fill: darkorange;
		}

        .online {
            fill: green;
        }

        .offline {
            fill: red;
        }
		
		.selected {
			fill: blue;
			stroke: #20a4cc;
    		stroke-width: 3;
		}
		
		.detalhes {
			width: 270px;
			height: 160px;
			position: absolute;
			top: 620px;
			left: 20px;
			border: 2px solid blue;
			z-index: 1;
			color: blue;
			font-weight: bold;
			font-family: Leelawadee, Ebrima, 'Bahnschrift Light', Gadugi, 'Nirmala UI', 'Segoe UI', Verdana;
			font-size: medium;
			padding: 10px;
		}
		
		h1 {
			text-align: center;
    		padding: 6px 0px;
		}
		
		ul {
			list-style-type: none;
		}
		
		li > span {
			font-weight: normal;
			color: black;
		}
		
		dialog button#closeBtn {
			position: absolute;
			top: 5%;
			right: 10%;
			border: none;
			color: red;
			background-color: transparent;
			padding: 0;
			border-radius: 50%;
			z-index: 2;
		}
		dialog button#closeBtn:hover {
			cursor: pointer;
		}
		dialog button#closeBtn svg {
			width: 20px;
			height: 20px;
		}
    </style>
</head>

<body>
    <div class="content">
        <img src="../_lib/img/grp__NM__bg__NM__mapas_antenas_transparente.png" alt="Mapeamento enlaces antenas de rádio">
<?
		vetorizacao_enlaces();
?>
    </div>
	
	<dialog class='detalhes'>
<!-- 		<h1>Detalhes</h1> -->
		<ul>
			<li>Enlace: <span id='enlace'></span></li>
			<li>IP emissora: <span id='ip_antena_emissora'></span></li>
			<li>Latência: <span id='latencia_antena_emissora'></span></li>
			<li>IP receptora: <span id='ip_antena_receptora'></span></li>
			<li>Latência: <span id='latencia_antena_receptora'></span></li>
			<li>Observações: <span id='observacoes'></span></li>
		</ul>
		<button id="closeBtn" aria-label="Fechar Notificações">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
				<path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
			</svg>
		</button>
	</dialog>

    <script>
		var objEnlaces = <?=$objEnlaces?>;
		
		//ABRIR MODAL
		for (let host in objEnlaces) {
			construirEnlace(host);
			document.querySelectorAll("#" + host).forEach((el) => el.addEventListener('click', () => {
				objEnlaces['selecionado'] = host;
				openModal(host);
			}));
		}
		
		//FECHAR MODAL
		var modal = document.querySelector('dialog');
		modal.querySelector('#closeBtn').addEventListener('click', () => {closeModal();});
		document.addEventListener('keydown', function(event) {
			if (event.code === 'Escape') { // Verifica se a tecla ESC foi pressionada
				closeModal();
			}
		});
		
		async function construirEnlace(host) {
			var elemento = document.querySelector("#" + host);
			elemento.classList.add('processing');
			await testarAntenas(host);
			colorirEnlace(host, elemento);
		}

		async function testarAntenas(host) {
			objEnlaces[host].ping_antena_emissora = await ping(objEnlaces[host].ip_antena_emissora);
			objEnlaces[host].ping_antena_receptora = await ping(objEnlaces[host].ip_antena_receptora);
		}
		
		function colorirEnlace(host, elemento) {
			let status = 0;
			if (objEnlaces[host].ping_antena_emissora != 'offline') {
				status ++;
			}
			if (objEnlaces[host].ping_antena_receptora != 'offline') {
				status ++;
			}

			elemento.classList.remove('processing');
			switch (status) {
				case 0:
					elemento.classList.add('offline');
					break;
				case 1:
					elemento.classList.add('partially');
					break;
				case 2:
					elemento.classList.add('online');
					break;
				default:
					console.log('cor default');
					elemento.classList.remove('partially');
					elemento.classList.remove('online');
					elemento.classList.remove('offline');
			}
		}
		
		function colorirLatencia(elemento) {
			elemento.style.fontWeight = 'bold';
			if (elemento.innerHTML == 'offline') {
				elemento.style.color = 'red';
			} else {
				elemento.style.color = 'green';
			}
		}

		async function ping(ip) {
			//#GET
			/*
			try {
				let params = new URLSearchParams({
					checkPing: true,
					ip: ip
				});
				const response = await fetch('<?= $_SERVER["PHP_SELF"] ?>?' + params);
				if (!response.ok) {
					throw new Error('Ocorreu um erro na requisição AJAX');
				}
				const data = await response.json();
console.log('Usando o método GET, o ping do ip ' + ip + ' é:', data.ping);
				return data.ping;
			} catch (error) {
				// enlace.classList.add('offline');
				console.error('Erro:', error.message || error);
        		return 'offline';
				
			}
			*/
			//#POST
			var params = {
			    checkPing: true,
			    ip: ip,
			};
			var requestOptions = {
			    method: 'POST',
			    headers: {
			        'Content-Type': 'application/x-www-form-urlencoded'
			    },
			    body: 'checkPing=' + params.checkPing + '&ip=' + params.ip
			};

			return fetch('<?= $_SERVER['PHP_SELF'] ?>', requestOptions)
			    .then(response => {
			        if (!response.ok) {
			            throw new Error('Ocorreu um erro na requisição AJAX');
			        }
			        return response.json(); // parsing to object, facilitando sua manipulação
			    })
			    .then( data => {
console.log('Usando o método POST, o ping do ip ' + ip + ' é:', data.ping);
					return data.ping;
				})
			    .catch((error) => console.error('Erro:', error.message || error));
		}
		
		function openModal(host) {
			document.querySelector("#" + host).classList.add('selected');
			
			document.querySelector('span#enlace').innerText = host;
			document.querySelector('span#ip_antena_emissora').innerText = objEnlaces[host].ip_antena_emissora;
			document.querySelector('span#ip_antena_receptora').innerText = objEnlaces[host].ip_antena_receptora;
			document.querySelector('span#observacoes').innerText = objEnlaces[host].observacoes;
			
			var latenciaEmissora = document.querySelector('span#latencia_antena_emissora');
			var latenciaReceptora = document.querySelector('span#latencia_antena_receptora');
			latenciaEmissora.innerText = objEnlaces[host].ping_antena_emissora;
			latenciaReceptora.innerText = objEnlaces[host].ping_antena_receptora;
			colorirLatencia(latenciaEmissora);
			colorirLatencia(latenciaReceptora);
			
			modal.showModal();
		}
		
		function closeModal(host) {
			document.querySelector("#" + objEnlaces.selecionado).classList.remove('selected');
			modal.close();
		}
    </script>
</body>

</html>
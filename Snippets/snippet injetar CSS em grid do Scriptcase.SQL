--injeta estilo CSS diretamente no valor do campo, para aplica��o grid/scriptcase

    CASE
        WHEN A.FK_SITUACAO = 1 THEN '<span class="aguardando">aguardando</span>'
        WHEN A.FK_SITUACAO = 2 THEN '<span class="autorizada">autorizada</span>'
        WHEN A.FK_SITUACAO = 3 THEN '<span class="negada">negada</span>'
        WHEN A.FK_SITUACAO = 4 THEN '<span class="cancelada">cancelada</span>'
        WHEN A.FK_SITUACAO = 5 THEN '<span class="consolidada">consolidada</span>'
        ELSE '<span class="nao-encontrado"> - </span>'
    END AS SITUACAO,

--#No evento onInit da aplica��o de consulta do Scriptcase:
?>
<style>
	:root {
		--light: #f8f9fa;
		--primary: #007bff;
		--success: #28a745;
		--danger: #dc3545;
		--secondary: #6c757d;
		--info: #17a2b8;
		--warning: #ffc107;
		--dark: #343a40;
	}
	[id^=id_sc_field_situacao_] span {
		padding: 4px;
		border-radius: 15px;
		color: var(--light);
	}
	.aguardando {
		background-color: var(--primary);
	}
	.autorizada {
		background-color: var(--success);
	}
	.negada {
		background-color: var(--danger);
	}
	.consolidada {
		background-color: darkorange;
	}
	.cancelada {
		background-color: var(--secondary);
	}
</style>
<?php

/*Nota: lembrar de configurar o campo para tipo 'texto'*/
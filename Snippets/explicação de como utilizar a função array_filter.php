a saída com var_dump() imprimia: array(2) { [0]=> bool(false) [1]=> bool(false) }
Intenção: eliminar valores falsos de dentro do array
<?php

# CHAMA FUNÇÕES DE NOTIFICAÇÃO EM MODAL
if ([usr_login]) {
	$notificacoes = array(
		controlLastViewed(1, 'getSqlAssinaturasPendentes'),
		controlLastViewed(2, 'getSqlAguardandoResposta'),
	);
	
	$notificacoes = array_filter(
		$notificacoes,
		function($value) {
			return $value !== false;
		}
	);
	
	echo 'onExecute<hr>';
	var_dump($notificacoes);exit;
}

Após array_filter() a saída ficou: array(0) { }
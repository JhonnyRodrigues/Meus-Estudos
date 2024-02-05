//usando_pseudo-classe_has_como condicao_para_iterar_varios_elementos

<?php
	$locais[] = array(
		'id' => {resultColors}->fields['ID_LOCAL'],
		'cor-evento' => {resultColors}->fields['COR_EVENTO'],
		'cor-fonte' => {resultColors}->fields['COR_FONTE']
	);

	foreach($locais as $local):
?>

<style>
	
	{/* MODO PADRÃO (MELHOR PERFORMANCE E COMPATIBILIDADE) */
	.fc-event-main:has(font[id-sala="<?= $local['id'];?>"]) .fc-event-title, .fc-event-main:has(font[id-sala="<?= $local['id'];?>"]) .fc-event-description  {
		color: <?= $local['cor-fonte'];?> !important;
	}

	/* MODO 'CSS NESTED' (MELHOR LEGIBILIDADE) */
	.fc-event-main:has(font[id-sala="<?= $local['id'];?>"]) { 
		background-color: <?= $local['cor-evento'];?> !important;
		.fc-event-title {
			color: <?= $local['cor-fonte'];?> !important;
		}
		
		.fc-event-description {
			color: <?= $local['cor-fonte'];?> !important;
		}
	}
	.fc-event.fc-event-resizable.fc-event-start.fc-event-end:has(font[id-sala="<?= $local['id'];?>"]) {
		background-color: <?= $local['cor-evento'];?> !important;
		border-color: <?= $local['cor-evento'];?> !important;
	}
<?php endforeach; ?>

</style>
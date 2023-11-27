<?php

$queryFontColors = "
	SELECT
		ID_LOCAL,
		COR_EVENTO,
		COR_FONTE
	FROM
		HELP_AGENDAMENTO_LOCAIS
";
sc_select(resultColors, $queryFontColors);
$locais = array();
if({resultColors} === false) {
	errorMessage("Não foi possível consultar as cores de fonte que serão aplicadas nos eventos.", 1);
} else {
	while(!{resultColors}->EOF) {
		$locais[] = array(
			'id' => {resultColors}->fields['ID_LOCAL'],
			'cor-evento' => {resultColors}->fields['COR_EVENTO'],
			'cor-fonte' => {resultColors}->fields['COR_FONTE']
		);
		{resultColors}->MoveNext();
	}
	{resultColors}->Close();
}

?> 

<style>	

	<?php foreach($locais as $local): ?>
		/* MODO PADRÃO (MELHOR PERFORMANCE E COMPATIBILIDADE) */
		/*.fc-event-main:has(font[id-sala="<?= $local['id'];?>"]) .fc-event-title, .fc-event-main:has(font[id-sala="<?= $local['id'];?>"]) .fc-event-description  {
			color: <?= $local['cor-fonte'];?> !important;
		}*/ 
	
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
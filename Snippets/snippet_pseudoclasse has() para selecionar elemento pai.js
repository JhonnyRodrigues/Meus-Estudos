/*A pseudoclasse :has() seleciona elementos ao atender sua condição().
É basicamente uma forma de "seleção inversa", onde se pode aplicar estilos a um elemento com base no que está dentro dele.
Permite criar seletores dinâmicos e interativos diretamente no CSS sem depender de JavaScript para manipular o DOM.
Ajuda a selecionar um elemento PAI com base nos FILHOS*/

<? php
	$locais[] = array(
		'id' => { resultColors } -> fields['ID_LOCAL'],
		'cor-evento' => { resultColors } -> fields['COR_EVENTO'],
		'cor-fonte' => { resultColors } -> fields['COR_FONTE']
	);

foreach($locais as $local) :
?>

<style>

	{/*}MODO PADRÃO (MELHOR PERFORMANCE E COMPATIBILIDADE)*/
	.fc-event-main:has(font[id-sala="<?= $local['id'];?>"]) .fc-event-title,
	.fc-event-main:has(font[id-sala="<?= $local['id'];?>"]) .fc-event-description  {
		color: <?= $local['cor-fonte'];?> !important;
	}

	/* MODO 'CSS NESTED' (MELHOR LEGIBILIDADE) */
	.fc-event-main:has(font[id-sala="<?= $local['id'];?>"]) {
		background - color: <?= $local['cor-evento'];?> !important;
		.fc-event-title {
			color: <?= $local['cor-fonte'];?> !important;
		}
		.fc-event-description {
			color: <?= $local['cor-fonte'];?> !important;
		}
	}

	.fc-event.fc-event-resizable.fc-event-start.fc-event-end:has(font[id-sala="<?= $local['id'];?>"]) {
		background - color: <?= $local['cor-evento'];?> !important;
		border-color: <?= $local['cor-evento'];?> !important;
	}

<?php endforeach; ?>

</style>
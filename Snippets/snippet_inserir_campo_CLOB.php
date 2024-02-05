<?php

{mensagem} = str_replace("'","''",{mensagem});

$messageToInsert = '';

for($i = 0; $i < (strlen({mensagem})/4000); $i++) { //varchar2 aceita, no máximo, 4000 caracteres
	$messageToInsert .= ($i == 0) ? '' : ' || ';
	$messageToInsert .= "TO_CLOB('" . substr({mensagem}, 4000 * $i, 4000) . "')";
}
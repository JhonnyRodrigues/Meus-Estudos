<?php

$variavel = array(
	'teste' => array (
		'data' => '2022-11-09',
		'ph' => array (
			'10',
			'20'
		)
	)
);
// uma variсvel, que contщm um array, que contщm em sua 1А propriedade outro array , de 2 posiчѕes(data e ph); sendo que a 1А posiчуo armazena uma data, e a 2А posiчуo armazena outro array; este tambщm com 2 posiчѕes nуo-nomeadas (0 e 1) e com valores 10 e 20, respectivamente

foreach ($variavel['teste']['ph'] as $value) {...} //para cada valor-de-chave do array 'ph', faчa...

/*
o operador -> щ usado para acessar mщtodos e propriedades de um OBJETO
o operador => щ usado para associar valores a chaves de um ARRAY
*/

?>
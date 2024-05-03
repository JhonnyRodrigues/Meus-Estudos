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
// uma variсvel, que contщm um array, que contщm em sua 1А propriedade 'teste' outro array , de 2 posiчѕes('data' e 'ph'); sendo que a 1А posiчуo contщm uma data, e a 2А posiчуo contщm outro array; este њltimo array tambщm com 2 posiчѕes nуo-nomeadas (portanto, [0] e [1]) e respectivamente com valores '10' e '20'

foreach ($variavel['teste']['ph'] as $value) {...} //para cada valor-de-chave do array 'ph', faчa...

/*
o operador -> щ usado para acessar mщtodos e propriedades de um OBJETO
o operador => щ usado para associar valores a chaves de um ARRAY
*/

?>
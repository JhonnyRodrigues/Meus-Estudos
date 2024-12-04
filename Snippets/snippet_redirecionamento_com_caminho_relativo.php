<?php
// header('location:https://www.semaepiracicaba.sp.gov.br/img/mapeamento_antenas.jpg'); //esse caminho foi substituído pelo relativo abaixo
header('Location: ' . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] .  '/_lib/img/mapeamento_camadas_antenas.jpg');
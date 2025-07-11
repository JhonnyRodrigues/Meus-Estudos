<?php

// Objetivo: transformar array(array('COD_FUNCIONARIO' => "106"),array('COD_FUNCIONARIO' => "623"))   em  array("106", "623") 
//Ou seja, guardar valores do dataset dentro de �nico array

var_dump({datasetSuperFinancas});
/* Retorna:
array(2) {
  [0]=>
  array(1) {
    ["COD_FUNCIONARIO"]=>
    string(3) "106"
  }
  [1]=>
  array(1) {
    ["COD_FUNCIONARIO"]=>
    string(3) "623"
  }
}
*/

var_dump(array_map(function ($arg) {return $arg['COD_FUNCIONARIO'];}, {datasetSuperFinancas})); //função anônima ou
$lotacoesConsolidadoras = array_map(fn($arg) => $arg['COD_LOTACAO'], {datasetLotacoesConsolidadoras}); //arrow function
/* Retorna:
array(2) {
  [0]=>
  string(3) "106"
  [1]=>
  string(3) "623"
}
*/

// Explicação: "Para cada elemento contido no array {datasetSuperFinancas}, retorne o valor contido em sua chave 'COD_FUNCIONARIO'"

?>
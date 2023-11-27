<?php

#############################################################################################################
############# EXEMPLO APLICANDO REGEX COM GRUPOS PARA DETECTAR PADRÃO NO CONTEÚDO DE UMA STRING #############
#############################################################################################################

$stmtUpdateRhFuncionarios = "
UPDATE RH_FUNCIONARIOS SET 
    NOME_USUARIO = UPPER('{login_usuario}'),
    EMAIL = LOWER('$emailUser')
WHERE
    COD_FUNCIONARIO = '{novoFuncionario}'
";

preg_replace('/^(update table set campo = \').*(\' where 1 = 1)$/', '$1*****$2', $stmtUpdateRhFuncionarios);
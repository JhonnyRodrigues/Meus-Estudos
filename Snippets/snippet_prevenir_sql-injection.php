<?php
$asjkdhjkh =                  {ASSUNTO};  //echo   '1'  UNION SELECT table_name FROM all_tables
$asjkdhjkh = sc_sql_injection({ASSUNTO}); //echo '''1'' UNION SELECT table_name FROM all_tables'
$query = "SELECT 'whatever' from dual where '1' = " . $asjkdhjkh;
sc_lookup(dataset, $query);
echo '<pre>';
var_dump($asjkdhjkh);
var_dump($query);
var_dump({dataset});

/*
NOTA: A macro sc_sql_injection() faz uso da biblioteca ADOdb (Database Abstraction Layer for PHP)que, por sua vez, utiliza a função qStr().
    A função qStr() recebe uma string de entrada e permite que seja:
        1. Envelopada entre aspas simples. O valor pode então ser usado, por exemplo, em uma instrução SQL.
        2. Faça com que as aspas dentro da string escapem de maneira apropriada para o banco de dados. Isso é feito sempre que possível usando funções de driver PHP, por exemplo. MySQL real_escape_string.
*/

### EXEMPLO DE COMO TRATAR OS CAMPOS ###
if (empty({campo}) || !is_numeric({campo})) {
	sc_ajax_message("Não identificado o funcionario assinante.", "", "type=error");
} else {
	{campo} = sc_sql_injection({campo});
}
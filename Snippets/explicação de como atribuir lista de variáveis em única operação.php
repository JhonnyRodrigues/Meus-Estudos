<?php
$contas = [
    [
        'titular' => 'Vinicius Dias',
        'saldo' => 100
    ],
    [
        'titular' => 'Maria Joaquina',
        'saldo' => 1000
    ],
    [
        'titular' => 'João da Silva',
        'saldo' => 800
    ],
];
#MÉTODO PARA DEFINIR AS VARIÁVEIS $titular E $saldo
foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
    echo "$titular possui $saldo reais" . PHP_EOL;
}



#OUTRO EXEMPLO COM SINTAXE ALTERNATIVA
$result = $pdo->query("SELECT id, name FROM employees");
list($id, $name) = $result→fetch(PDO::FETCH_NUM);
/*Nesse caso nós estamos usando a sintaxe resumida usando colchetes, mas poderíamos sem problema usar a sintaxe mais verbosa com com list().*/
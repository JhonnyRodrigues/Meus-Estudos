<?php

require __DIR__ . "/funcoes.php";

$saldo = (float) 1_000.00; //o underline é ignorado, utilizado apenas para facilitar a leitura
$titularConta = 'Jhonny Rodrigues';

echo "**********************\n";
echo "Titular: $titularConta\n";
echo "Saldo atual: R$ $saldo\n";
echo "**********************";

do {
    echo "\n1. Consultar saldo atual";
    echo "\n2. Sacar valor";
    echo "\n3. Depositar valor";
    echo "\n4. Sair\n";
    
    $opcao = (int) fgets(STDIN); // ler a entrada do usuário

    switch ($opcao) {
        case 1:
            echo "**********************\n";
            echo "Titular: $titularConta\n";
            echo "Saldo atual: R$ $saldo\n";
            echo "**********************\n\n";
            break;

        case 2:
            echo "**********************\n";
            echo "Deseja sacar quanto? R$\n";
            echo "**********************\n";
            $valorSacar = (float) fgets(STDIN);
            if ($valorSacar > $saldo) {
                echo "**********************\n";
                echo "Saldo insuficiente!\n";
                echo "**********************\n";
            } else {
                $saldo -= $valorSacar;
                echo "****************************\n";
                echo "Saque realizado com sucesso!\n";
                echo "****************************\n";
            }
            break;
        
        case 3:
            echo "**********************\n";
            echo "Deseja depositar quanto? R$ \n";
            echo "**********************\n";
            $saldo += (float) abs(fgets(STDIN));
            echo "Depósito realizado com sucesso!\n";
            break;

        case 4:
            echo "**********************\n";
            echo "Encerrando programa...\n";
            echo "**********************\n";
            break;

        default:
            echo "*********************\n";
            echo "ERRO: Opção inválida!\n";
            echo "*********************\n";
            break;
    }
} while ($opcao != 4);
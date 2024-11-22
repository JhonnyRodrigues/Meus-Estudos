<?php

$filme = [
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['nota'],
    'genero' => $_POST['genero'],
];

file_put_contents('filme.json', json_encode($filme)); //cria arquivo com conteudo em formato JSON

header('Location: /sucesso.php?filme=' . $filme['nome']); //aplica padrão PGR (POST/redirect/GET)
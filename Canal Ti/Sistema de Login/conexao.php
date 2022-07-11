<?php
define('HOST','127.0.0.1'); //essa constante vai armazenar o endereço IP do Banco de Dados
define('USUARIO', 'root');  //armazena o usuario do Banco de Dados
define('SENHA', 'hakunamatata');
define('DB','MeuBanco'); //essa constante vai armazenar o nome da Base de Dados

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('ERRO: Não foi possível conectar'); //a variável armazena as constantes através da função e, caso haja erro, apresenta uma string de ERRO


?>
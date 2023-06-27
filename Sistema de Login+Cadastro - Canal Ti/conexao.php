<?php

define('HOST','127.0.0.1'); //essa constante vai armazenar o endereço IP do Banco de Dados
define('PORTA', 3306);
define('USUARIO', 'root');  //armazena o usuario do Banco de Dados
define('SENHA', 'hakunamatata');
define('DB','MeuBanco'); //essa constante vai armazenar o nome da Base de Dados
define('CHARSET', 'utf8mb4');

############################################ PDO #####################################
# conexão usada no arquivo `cadastrar_usando_sweetalert2.php`
try {
    $conexao = new PDO("mysql:host=".HOST.";port=".PORTA.";dbname=".DB.",".USUARIO.",".SENHA);
} catch (PDOException $err) {
    $retorno = [
        'status' => false, 
        'msg' => "Não foi possível se conectar ao Banco de Dados.Erro gerado: " . $err->getMessage()
    ];
}

######################################## PROCEDURAL ######################################
# conexão usada no arquivo `cadastrar.php`
// try {
//     $conexao = mysqli_connect(HOST, DB, USUARIO, SENHA);
// } catch (\mysqli_sql_exception $err) {
//     die("Não foi possível se conectar ao Banco de Dados.Erro gerado: " . $err->getMessage());
// }

####################################### CONDICIONAL ######################################
/*
$conexao = new mysqli(HOST, USUARIO, SENHA, DB, PORTA);
if ($conexao->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if (!$mysqli->query("SET a=1")) {
    printf("Error message: %s\n", $mysqli->error);
}
$conexao->close();
*/
################################### ORIENTADO A OBJETOS ####################################
/*
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conexao = new mysqli(HOST, USUARIO, SENHA, DB, PORTA);
    $conexao->set_charset(CHARSET);
    $conexao->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
} catch (\mysqli_sql_exception $e) {
     throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
} finally {
    unset(HOST, PORTA, USUARIO, SENHA, DB, CHARSET); // we don't need them anymore
}

function prepared_query($conexao, $sql, $params, $types = "") {
    $types = $types ?: str_repeat("s", count($params));
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    return $stmt;
}
*/

?>
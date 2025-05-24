<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            
            $nome = (string)"Jhonny"; //typecast forçando a variável a ser do tipo string
            $n = 4;
            $n = 4.5; //usando coerção(deixando o PHP decidir), muda a variável do tipo int para float
            echo $nome;
            $idade = 29;
            echo "<br>Concatenando: ".$nome." tem ".$idade." anos."; //utilizando concatenação através do ponto (.)
            echo "<br>Por placeholder: $nome tem $idade anos!"
        ?>
    </div>
</body>
</html>
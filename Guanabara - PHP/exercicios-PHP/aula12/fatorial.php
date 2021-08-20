<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Fatorial</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?PHP
        $valor = isset($_GET["num"]) ? $_GET["num"] : 0; //o operador ternário verifica se foi inserido um número no formulário
        echo "<h1>Calculando o fatorial de $valor...</h1>";
        $cont = $valor;
        $fat = 1;
        do {
            $fat *= $cont;
            $cont--;
            echo " x $cont";
        } while ($cont > 1);
        echo "<br><h2>$valor! = <span class='foco'>$fat</span></h2>";
        ?>
        <br><a href="fatorial.html" class="botao">Voltar ao Formulário</a>
        <a href="javascript:history.go(-1)" class="botao">Página anterior</a>
    </div>
</body>

</html>
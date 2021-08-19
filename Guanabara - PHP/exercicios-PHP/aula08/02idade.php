<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Exercicio 02 da Aula 08</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]"; //condição ternária combinada com o ISSET que define se a variável vai receber ou o nome ou a string pré-definida
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
        $idade = date("Y") - $ano; //o parâmetro y minúsculo vai mostrar o ano de forma reduzida (21), já o Y maiúsculo mostra o ano inteiro
        echo"$nome é $sexo e tem $idade anos.";
    ?>
    <br/><a href="exercicio2.html">Voltar</a> <!--link para voltar ao doc html-->
</div>
</body>
</html>
 
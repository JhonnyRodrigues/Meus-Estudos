<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Utilizando rotinas externas</title>
  <link rel="stylesheet" href="../_css/estilo.css">
  <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
  <div>
    <?php
    include "funcoes.php"; //adiciona arquivo (biblioteca)
    //require "funcoes2.php"; é semelhante ao 'include' porém torna obrigatória a existência do arquivo se não o programa para.
    include_once "funcoes2.php";
    //Existem também as variações include_once e require_once que previnem que o mesmo arquivo seja carregado de novo, ou seja, obriga a carregar o arquivo apenas uma vez.
    echo "<h1>Testando novas funções...</h1>";
    ola();
    mostraValor(4);
    echo "<p>Finalizando o programa...</p>";
    ?>
  </div>
</body>

</html>
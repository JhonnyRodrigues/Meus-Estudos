<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Variáveis dentro de Variáveis</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php
        $j = "abc"; //cuidado para não atribuir proibições à nomeação de variáveis como acentos, símbolos ou números no ínicio
        $$j = "def"; //note o cifrão duplo
        echo "O conteúdo da variável J é $j"; //imprime 'abc'
        echo "<br>A variável criada recebeu o valor $abc"; //imprime 'def'
    ?>
</div>
</body>
</html>
 
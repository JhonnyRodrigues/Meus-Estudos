<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Somatória com múltiplos parâmetros</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <!--endereço do estilo editado pelo professor, atenção para o padrão Linux: "../"-->
</head>

<body>
    <div>
        <?php 
            function soma () { //sem parâmetros estipulados
                $p = func_get_args(); //vetor 'p' recebe os valores dos parâmetros
                $total = func_num_args(); //variável '$total' recebe a quantidade de parametros
                $somatoria = 0;
                for ($i=0;$i<$total;$i++) {
                    $somatoria += $p[$i];
                }
                return $somatoria;
            }

            $result = soma (3,5,2,7);
            echo "A somatória dos parâmetros é $result";
            //lembrando que '$p', '$total' e '$somatoria' são todas variáveis de escopo LOCAL, ou seja, não funcionam fora do bloco da função
        ?>
    </div>
</body>

</html>
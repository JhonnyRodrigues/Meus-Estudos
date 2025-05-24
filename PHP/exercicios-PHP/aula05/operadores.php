<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <link rel="stylesheet" href="../_css/estilo.css"> <!--endereço do estilo editado pelo professor-->
</head>
<body>
<div>
    <?php 
        $b1 = 3;//não esqueça de colocar o cifrão na frente da variável
        $b2 = 2;
        //inserir a seguinte URL no navegador: http://localhost/exercicios-php/aula05/operadores.php?a=3&b=2
        $b1 = $_GET["a"]; //pega o que vem da URL
        $b2 = $_GET["b"];
        echo "<br><h2>Valores recebidos: $b1 e $b2</h2>";

        $media = ($b1 + $b2) / 2;
        echo "A somatória é ".$b1+$b2; //note a concatenação seguida da operação de somar
        echo "<br>A subtração vale ".$b1-$b2;
        echo "<br> A multiplicação vale ".$b1*$b2;
        echo "<br>A divisão vale ".$b1/$b2;
        echo "<br>O módulo (resto da divisão) vale ".$b1%$b2;
        echo "<br>A média vale $media";
      
    ?>
</div>
</body>
</html>
 
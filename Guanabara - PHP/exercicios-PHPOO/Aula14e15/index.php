<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Final</title>
</head>
<body>
    <pre>
        <?php
            include_once 'Video.php';
            include_once 'Gafanhoto.php';;
            $v[0] = new Video("Aula 1 de PHP");
            $v[1] = new Video("Aula 13 de POO");
            $v[2] = new Video("Aula 15 de HTML5");
            
            $g[0] = new Gafanhoto("Jubileu", 36, "M", "juba");
            $g[1] = new Gafanhoto("Creuza", 68, "F", "creuzita");
            $g[2] = new Gafanhoto("Jhonny", 30, "M", "jhonny_b_goode");
            
            print_r($v);
            print_r($g);
        ?>
    </pre>
</body>
</html>
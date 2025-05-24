<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
    <pre>
        <?php
            require_once "Pessoa.php";
            require_once "Livro.php";

            $pessoa[0] = new Pessoa("Whinderson",34,"M");
            $pessoa[1] = new Pessoa("Creuza",27,"F");

            $livro[0] = new Livro("Sargento de Milícias","Manoel A. Almeida",513,$pessoa[0]);
            $livro[1] = new Livro("PHP Básico", "Gustavo Guanabara", 300, $pessoa[0]);
            $livro[2] = new Livro("Java Intermediário","Zé da Silva",800,$pessoa[1]);
            $livro[3] = new Livro("O pequeno Príncipe","Jean de La France",150,$pessoa[1]);
            
            $livro[0]->abrir();
            $livro[0]->folhear(96);
            $livro[0]->avancarPag();
            $livro[0]->detalhes();
            $livro[3]->abrir();
            $livro[3]->folhear(800);
            $livro[3]->voltarPag();
            $livro[3]->detalhes();

            print_r($livro[1]);
            var_dump($livro[2]);

        ?>
    </pre>
</body>
</html>
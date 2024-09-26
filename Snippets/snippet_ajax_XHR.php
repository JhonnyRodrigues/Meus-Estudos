<?php
if (isset($_POST['name']) && $_POST['name'] != '') {
    #primeiramente simulando um json (db.json)
    if ($_POST['name'] == 'carro') {
        $veiculo = '{
            "car":
              [
                {
                "color":"black",
                "year":2018
                },
                {
                  "color":"red",
                  "year":2007
                }
              ]
            }';
        echo json_encode($veiculo);
    #simulando retorno em array de uma query
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $pessoa = [
            'name' => $name,
            'age' => 32,
            'city' => 'Piracicaba'
        ];
        echo json_encode($pessoa);
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX com XHR</title>
</head>

<body>
    <form name="form" id="form" method="post" action="$_SERVER['PHP_SELF']">
        <label for="name">Palavra: </label>
        <input type="text" name="name" id="name" placeholder="digite a palavra 'carro' (ou outra qualquer)" size="35">
        <input type="submit" value="Enviar"><br>
        <label for="resposta"><strong>Retorno: </strong></label>
        <span id="resposta"></span>
    </form>

    <script>
        (function readyJS(win, doc) {
            'use strict'; //Habilita o modo estrito dentro da função para garantir que o código seja mais seguro e menos propenso a erros.

            let form = doc.querySelector('#form');
            let spanResposta = doc.querySelector('span#resposta');

            //Send ajax form
            function sendForm(event) {
                event.preventDefault();
                let ajax = new XMLHttpRequest(); //#1
                let params = 'name=' + doc.querySelector('#name').value;
                ajax.open('POST', '<?= $_SERVER["PHP_SELF"]; ?>', true); //#2 ($_SERVER["PHP_SELF"] retorna o caminho do script atual em execução)
                ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                ajax.onreadystatechange = function() { //#3
                    if (ajax.status === 200 && ajax.readyState === 4) {
                        let json = JSON.parse(ajax.responseText);
                        if (doc.querySelector('input#name').value == 'carro') {
                            console.log(json);
                            spanResposta.innerHTML = json;
                        } else {
                            let retorno = 'nome: ' + json.name + ' - idade: ' + json.age + ' - cidade: ' + json.city;
                            console.log(retorno);
                            spanResposta.innerHTML = retorno;
                        }
                    }
                };
                ajax.send(params); //#4
            }
            form.addEventListener('submit', sendForm, false);

        })(window, document);
    </script>
</body>

</html>
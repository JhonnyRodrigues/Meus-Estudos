<?php
if (isset($_POST['name']) && $_POST['name'] != '') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $arr = [
        'name' => $name,
        'age' => 32,
        'city' => 'Piracicaba'
    ];
    echo json_encode($arr);
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
        <input type="text" name="name" id="name" placeholder="Write your name"><br>
        <input type="submit" value="Enviar">
        <div id="resposta"></div>
    </form>

    <script>
        (function readyJS(win, doc) {
            'use strict'; //Habilita o modo estrito dentro da função para garantir que o código seja mais seguro e menos propenso a erros.

            let form = doc.querySelector('#form');
            let divResposta = doc.querySelector('div#resposta');

            //Send ajax form
            function sendForm(event) {
                event.preventDefault();
                let ajax = new XMLHttpRequest();
                let params = 'name=' + doc.querySelector('#name').value;
                ajax.open('POST', '<?= $_SERVER["PHP_SELF"]; ?>', true); //$_SERVER["PHP_SELF"] retorna o caminho do script atual em execução
                ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                ajax.onreadystatechange = function() {
                    if (ajax.status === 200 && ajax.readyState === 4) {
                        let json = JSON.parse(ajax.responseText);
                        let retorno = 'nome: ' + json.name + ' - idade: ' + json.age + ' - cidade: ' + json.city;
                        console.log(retorno);
                        divResposta.innerHTML = retorno;
                    }
                };
                ajax.send(params);
            }
            form.addEventListener('submit', sendForm, false);

        })(window, document);
    </script>
</body>

</html>
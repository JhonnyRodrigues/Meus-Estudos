<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX com fetch simples</title>
    <script>
        const URL = 'https://dog.ceo/api/breeds/list/all'
        fetch(`${URL}`)
            .then((body) => body.json()) //'body' é o retorno da requisição; converte esse retorno para um objeto
            .then((data) => console.log(data)) //o retorno da função .json() também é uma Promise; imprime esse objeto depois que terminar o parsing
            .catch((error) => console.error('Erro:', error.message || error)) //o operador || retorna o próprio error (o objeto completo), o que pode ser útil caso o erro não tenha uma mensagem específica.
    </script>
</head>

<body>
    Observe o console
</body>

</html>
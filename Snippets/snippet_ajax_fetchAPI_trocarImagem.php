<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar e trocarimagem</title>
</head>

<body>
    <img src="brasao.png" alt="brasão"><br>
    <input type="button" value="trocar">

    <script>
        window.onload = function() {
            document.querySelector('input').onclick = function() {
                console.log('clicou!');
                var myImage = document.querySelector("img");
                fetch("caminhao_pipa.jpg")
                    .then(function(response) {
                        if (!response.ok) {
                            throw new Error(`HTTP error! Status: ${response.status}`);
                        }
                        return response.blob();
                    })
                    .then(function(myBlob) {
                        var objectURL = URL.createObjectURL(myBlob);
                        myImage.src = objectURL;
                    })
                    .catch((error) => console.error('Erro:', error.message || error));
            }
        }
    </script>
</body>

</html>
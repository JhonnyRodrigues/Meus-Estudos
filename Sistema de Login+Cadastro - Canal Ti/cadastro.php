<?php
session_start(); //indica ao PHP para trabalhar com sessões
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title has-text-grey">
                        Sistema de Cadastro
                    </h1>
                    <h2 class="subtitle has-text-grey">
                        Construído por <a href="https://github.com/JhonnyRodrigues" target="_blank" class="is-link">Jhonny Rodrigues</a>
                    </h2>
                    <h3 class="subtitle has-text-grey">
                        com a tutoria do <a href="https://youtube.com/canaltioficial" target="_blank">Canal TI</a>
                    </h3>

                    <?php if (@$_SESSION['status_cadastro']) { ?> <!--note que a condicional fica aberta-->
                        <div class="notification is-success">
                            <p>Cadastro efetuado!</p>
                            <p>Faça login informando o seu usuário e senha <a href="login.php">AQUI</a></p>
                        </div>
                    <?php }
                    unset($_SESSION['status_cadastro']); //agora fecha a condicional e destrói a sessão para não ficar sempre exibindo a mensagem
                    ?>

                    <?php if (@$_SESSION['usuario_existe']) { //o arroba silencia o erro PHP ("Warning: Undefined array")
                    ?>
                        <div class="notification is-info">
                            <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                        </div>
                    <?php }
                    unset($_SESSION['usuario_existe']);
                    ?>

                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
    session_start(); //toda a vez que trabalhar com sessões, lembre-se de usar essa função
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">       <!--DIV pro corpo-->
                <div class="column is-4 is-offset-4">       <!--DIV pros títulos-->
                    <h1 class="title has-text-grey">Sistema de Login JONATAS®</h1>
                    <h2 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">by Canal TI</a></h2>
                    <?php if (isset($_SESSION['nao_autenticado'])) { ?> <!--se a variável de sessão `nao_autenticado` existir, então mostra a DIV de ERRO-->
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php } // perceba que aqui é FECHADA a condicional aberta pra função isset()
                        unset($_SESSION['nao_autenticado']); //destrói essa sessão caso o usuário acesse a aplicação pela 1ª vez.
                    ?>  
                    <div class="box">                       <!--DIV pro formulário-->
                        <form action="login.php" method="POST">
                            <div class="field">             <!--DIV pro campo usuário-->
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">             <!--DIV pro campo senha-->
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
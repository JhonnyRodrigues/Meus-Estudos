----------------SISTEMA DE LOGIN-----------------

1- Criar arquivo `conexão.php`, declarar 4 variáveis (HOST, USUARIO, SENHA, NOME_BASE_DADOS) e depois uma variável `$conexao` para receber essas constantes

2- Criar banco+tabelas+colunas para cadastrar os usuários e inserir registros. Código:
CREATE TABLE `meubanco`.`usuario` (
  `ID_USUARIO` INT NOT NULL AUTO_INCREMENT,
  `USUARIO` VARCHAR(200) NOT NULL,
  `SENHA` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`));
INSERT INTO usuario (USUARIO,SENHA) VALUES ('Jhonny', md5('hakunamatata'))  //memorize esse nome de usuário

3- Criar arquivo `login.php`(para realizar as validações) e fazer include do arquivo `conexao.php` 

4- Criar formulário `index.php` e apontar (com o parâmetro `action`) para o arquivo `login.php`

5- Criar arquivo `painel.php` //e utilizar a $_SESSION['usu@rio'] (nela contém um array que guarda os nomes dos usuários)

6- Criar arquivo `verifica_login.php` para impedir que a página `painel.php` seja acessada sem autenticação prévia, e fazer o include desse arquivo no arquivo `painel.php`

7- Criar arquivo `logout.php`, usar função session_destroy() para destruir as sessões, redirecionar esse arquivo para a `index.php` e criar link 'Encerrar sessão' apontando para `painel.php`

8- Criar uma $_SESSION['nao_autenticado'] na página `login.php` (para quando o usuario não for válido), iniciar uma sessão no arquivo `index.php` (na primeira linha), criar uma verificação na <div> que acusa "usuário ou senha inválidos", depois usar a função unset('nao_autenticado') para destruir essa sessão (caso o usuário acesse a aplicação pela 1ª vez)
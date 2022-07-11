----------------SISTEMA DE CADASTRO------------------

1- Criar formulário `cadastro.php` com campos para `nome, usuário e senha`

2- Criar arquivo `cadastrar.php` (para realizar as validações), iniciar sessão, incluir arquivo `conexao.php`, pegar todos os campos do formulário aplicando a função mysqli_real_scape_string()

3- Alterar tabela usuario, inserindo campos `nome` e `data_cadastro`. Código:
TRUNCATE usuario; --é necessário apagar registros para alterar a estrutura da tabela
ALTER TABLE meubanco.usuario ADD nome varchar(100) NOT NULL;
ALTER TABLE meubanco.usuario ADD data_cadastro DATETIME NOT NULL;

4- 
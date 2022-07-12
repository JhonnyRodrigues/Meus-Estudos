----------------SISTEMA DE CADASTRO------------------

1- Alterar tabela usuario, inserindo campos `nome` e `data_cadastro`. Código:
TRUNCATE usuario; --é necessário apagar registros para alterar a estrutura da tabela
ALTER TABLE meubanco.usuario ADD nome varchar(100) NOT NULL;
ALTER TABLE meubanco.usuario ADD data_cadastro DATETIME NOT NULL;

2- Criar formulário `cadastro.php` com campos para `nome, usuário e senha`

3- Criar arquivo `cadastrar.php` , iniciar sessão, incluir arquivo `conexao.php`, capturar todos os campos do formulário aplicando funções mysqli_real_scape_string(), trim() e md5()

4- Criar uma variável `$sql` para receber uma query que valida se o usuário existe ou não no BD, criar variável `$resultado` para executar essa query por meio da função mysqli_query(), criar variável `$linha` para receber o resultado da query (será 0 ou 1), implementar condicional que cria a sessão 'usuario_existe' caso o retorno da query seja true

4- Fazer a variável `$sql` receber agora outra query que insere os campos no Banco de Dados, implementar uma condicional que, ao validar se a query foi executada com sucesso, cria a $_SESSION['usuario_existe']. Enfim, encerrar a conexão e redirecionar para `cadastro.php`

5- Iniciar sessão no formulário `cadastro.php` e implementar as validações para não deixar sempre exibindo as caixas de diálogos "cadastro efetuado!" ou "usuário já existe!"

6- Para passar o Nome (e não o usuário) na sessão do painel, altere o arquivo `login.php` (depois da validação if ($linha == 1) {) digitando: $usuario_bd = mysqli_fetch_assoc($resultado), troque o campo `usuario` por `nome` na $query e mude o nome da sessão para: $_SESSION['nome'] = $usuario_bd['nome'].Alterar também o arquivo `verifica_login` e `painel.php` para não verificar mais a sessão ['usu@rio'] e sim ['nome']

7- Implementar link na Tela de Login (página `index.php`) apontando para a Tela de Cadastro (página `cadastro.php`)
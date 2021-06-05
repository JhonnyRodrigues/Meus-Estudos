CREATE DATABASE cadastro;	-- cria um banco de dados chamado `cadastro`

USE cadastro;				-- abre o banco `cadastro`

CREATE TABLE pessoas (
    nome VARCHAR(30),
    idade TINYINT(3),
    sexo CHAR(1),
    peso FLOAT,
    altura FLOAT,
    nacionalidade VARCHAR(20)
);

DESCRIBE pessoas;			-- descreve a estrutura da tabela pessoas (também pode ser escrito como DESC)
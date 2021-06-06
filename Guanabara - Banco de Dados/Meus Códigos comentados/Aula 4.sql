DROP DATABASE cadastro;				-- apaga o banco `cadastro`

CREATE DATABASE cadastro			-- cria um banco chamado 'cadastro'*/
DEFAULT CHARACTER SET utf8			-- charset que declara a codificação padrão de caracteres, para aceitar caracteres especiais, como acentos
DEFAULT COLLATE utf8_general_ci;	-- Collation: parâmetro para definição dos caracteres como Case-Insensitive, ignorando letras maiúsculas ou acentos em uma busca

CREATE TABLE pessoas (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    nascimento DATE,
    sexo ENUM('M', 'F'),
    peso DECIMAL(5 , 2 ),			-- 5 algarismos, 2 depois da vírgula
    altura DECIMAL(3 , 2 ),
    nacionalidade VARCHAR(20) DEFAULT 'Brasil',
    PRIMARY KEY (id)
)  DEFAULT CHARSET=UTF8MB4;			-- padrão de caracteres(ou charset) para esta tabela criada
ALTER TABLE pessoas ADD COLUMN profissao varchar(10);	-- Adiciona um novo campo/coluna (declare sempre sem acento e em letras minúsculas)

ALTER TABLE PESSOAS DROP COLUMN profissao;				-- apaga colunas

ALTER TABLE pessoas ADD COLUMN profissao varchar(30) AFTER nome;	-- o parâmetro/constraint AFTER colocou a coluna criada depois da coluna nome
ALTER TABLE pessoas ADD #COLUMN		-- A palavra COLUMN é opcional
codigo INT FIRST;					-- O parâmetro/constraint FIRST adiciona a coluna no início da tabela, NÃO existe constraint 'last'

ALTER TABLE pessoas MODIFY COLUMN profissao varchar(20)	-- O comando MODIFY mofifica apenas tipos e constraints de COLUNAS, não sendo possível renomear!
not null DEFAULT '';-- *Foi necessário a constraint DEFAULT declarar como VAZIO pois essa coluna já fora criada com valores nulos, o que entraria em conflito com o NOT NULL atual

ALTER TABLE pessoas CHANGE COLUMN profissao prof varchar(20) not null DEFAULT '';	-- Altera o nome da coluna profissão para `prof`
-- O comando CHANGE permite modificar não apenas tipos e constraints,mas também RENOMEAR a coluna
-- Porém sua sintaxe exige descrever o velho e o novo nome, e também repetir todas as constraints anteriores

ALTER TABLE pessoas RENAME TO gafanhotos;	-- MODIFY e CHANGE modificam a coluna, RENAME TO só renomeia a tabela

/*******************************/

CREATE TABLE IF NOT EXISTS cursos (	 -- esse parâmetro "se não existir" impede de sobrescrever uma tabela já existente com o mesmo nome, evitando assim, a perda de registros
nome VARCHAR(30) NOT NULL UNIQUE,	-- a constraint UNIQUE não permite dois cursos com o mesmo nome
descricao TEXT,						-- TEXT determina a precisão da variável como textos longos
carga INT UNSIGNED,					-- UNSIGNED significa sem sinal, não permitindo números negativos
totaulas INT UNSIGNED,
ano YEAR DEFAULT '2021'				-- define por padrão o ano 2021			e não tem (,) pq é a última definição!
) DEFAULT CHARSET = utf8mb4;

ALTER TABLE cursos ADD COLUMN id INT FIRST;	-- se criar uma tabela e esquecer de adicionar a PK, então crie depois uma coluna para receber a PK
ALTER TABLE cursos CHANGE id idcurso int;	-- ops, errei! alterando o nome da coluna
ALTER TABLE cursos ADD PRIMARY KEY (idcurso);	-- declarando `idcurso` como chave primária (não tem como criar uma coluna e já adcioná-la como PK!)

DESC cursos;	-- DESC é a forma comprimida do comando DESCRIBE, descreve a estrutura da tabela
DESC gafanhotos;
SELECT * FROM cursos;	-- apresenta todos os dados da tabela
SELECT * FROM gafanhotos;

/*a palavra DROP pode ser um parâmetro de ALTER TABLE (apagando colunas) ou um comando para apagar tabelas ou BDs (DROP TABLE, DROP DATABASE)
*****************************************************************************************************************************************/
 
CREATE TABLE IF NOT EXISTS teste (id INT, nome VARCHAR(30), idade INT);
INSERT INTO teste VALUE
('1', 'Pedro', '22'), ('2', 'Maria', '12'), ('3','Maricota','77');	-- por não ter uma PK, se essa linha de comando for executada mais de uma vez, os dados se repetirão
SELECT * FROM teste;
DROP TABLE teste;	-- apaga tabela
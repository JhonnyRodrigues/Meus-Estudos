USE cadastro;	-- abre o BD cadastro
ALTER TABLE gafanhotos DROP codigo;	-- apaga coluna `codigo` da tabela `gafanhotos`
SELECT * FROM cursos; 
DESC cursos;

INSERT INTO cursos VALUES
('1', 'HTML4', 'Curso de HTML5', '40','37', '2014'),
('2', 'Algoritmos', 'Lógica de Programação', '20','15', '2014'),
('3', 'Photoshop', 'Dicas de Photosop CC', '10','8', '2014'),
('4', 'PGP', 'Curso de PHP para iniciantes', '40','20', '2010'),
('5', 'Jarva', 'Introdução à linguagem Java', '10','29', '2000'),
('6', 'MySQL', 'Banco de dados MySQL', '30','15', '2016'),
('7', 'Word', 'Curso completo de Word', '40','30', '2016'),
('8', 'Sapateado', 'Danças Rítmicas', '40','30', '2018'),
('9', 'Cozinha Árabe', 'Aprenda a fazer kibe', '40','30', '2018'),
('10', 'Youtuber', 'Gerar polêmica e ganhar inscritos', '5','2', '2018');

UPDATE cursos SET nome = 'HTML5' WHERE idcurso = 1;	-- ATUALIZA a tabela cursos, CONFIGURANDO na coluna `nome` para 'HTML5', ONDE a PK(idcurso) é igual a 1 (primeira linha)
UPDATE cursos SET nome = 'PHP', ano = 2015 WHERE idcurso = 4;	-- atualiza a coluna `nome` e `ano`, sempre separando por vírgulas os campos
UPDATE cursos SET nome = 'Java', carga = 40, ano = 2015	WHERE idcurso = 5 LIMIT 1;	-- Por segurança, utilizou-se o parãmetro LIMIT, para limitar a alteração a apenas uma linha

DELETE FROM cursos WHERE idcurso = 8;	-- o comando DELETE apaga a tupla, onde a PK vale 8
DELETE FROM cursos WHERE ano = 2018 limit 2;	-- Usando a constraint de segurança LIMIT, apaga somente as 2 primeiras linhas

TRUNCATE TABLE cursos;	-- O comando TRUNCATE apaga todos os registros da TABELA, tenha cautela ao manipular esse comando!
TRUNCATE cursos;		-- TABLE pode ser omitido e o comando permanece válido, apagando todos os registros
USE cadastro;
DESCRIBE gafanhotos;
/****INSERINDO CHAVE ESTRANGEIRA*****/
ALTER TABLE gafanhotos ADD COLUMN cursopreferido INT;	-- Adiciona um campo que vai receber a chave estrangeira
ALTER TABLE gafanhotos ADD FOREIGN KEY (cursopreferido) REFERENCES cursos(idcurso);
-- A coluna `cursopreferido`, pertencente à tabela gafanhotos, está associada à coluna `idcurso` que, por sua vez, pertence à tabela ´cursos´
DESCRIBE gafanhotos;	-- Verifique se no campo `key` aparece "MUL" como chave estrangeira/ou chave múltipla

SELECT * FROM cursos;
SELECT * FROM gafanhotos;

UPDATE gafanhotos SET cursopreferido = 6 WHERE id = 1;	-- O aluno 1 (Daniel) vai assistir o curso 6(MYSQL)
SELECT * FROM gafanhotos;	-- Verifique o campo `cursopreferido` com o valor "6"
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '22' WHERE (`id` = '2');
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '12' WHERE (`id` = '3');
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '7' WHERE (`id` = '4');
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '1' WHERE (`id` = '5');
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '8' WHERE (`id` = '6');	-- No Workbench, ao invés de digitar tudo isso...
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '4' WHERE (`id` = '7');	-- você pode usar o ResultGrid para fazer UPDATE pela interface, automaticamente
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '5' WHERE (`id` = '8');
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '3' WHERE (`id` = '9');
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '30' WHERE (`id` = '10');
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '22' WHERE (`id` = '11');

DELETE FROM cursos WHERE idcurso = 6;	-- O sistema NÃO PERMITE, pois não é possível apagar tuplas/registros quando os mesmos têm relacionamento com outra tabela através de chave estrangeira
DESC gafanhoto_assiste_curso;
show table status;

/*****************INNER JOIN***************(o join tradicional)/
/*************faz a junção/união entre as tabelas*************/
SELECT nome, cursopreferido FROM gafanhotos;	-- Apresenta os alunos e a chave estrangeira do cursopreferido
SELECT nome, ano FROM cursos;					-- Apresenta o nome dos cursos
SELECT GAFANHOTOS.nome, GAFANHOTOS.cursopreferido, CURSOS.nome, CURSOS.ano FROM GAFANHOTOS JOIN cursos;	-- Juntou as 2 tabelas, porém não de forma inteligente, pois uniu CADA aluno com todos os 30 cursos
SELECT gafanhotos.nome, gafanhotos.cursopreferido, cursos.nome, cursos.ano FROM gafanhotos JOIN cursos ON cursos.idcurso = gafanhotos.cursopreferido;
/*É preciso um filtro, a importante cláusula ON acima, declara as relações, ou seja, ...
faz a ligação entre a chave primária(cursos.idcurso) com a chave estrangeira(gafanhotos.cursopreferido)*/
SELECT gafanhotos.nome, cursos.nome, cursos.ano FROM gafanhotos INNER JOIN cursos ON cursos.idcurso = gafanhotos.cursopreferido;	-- Já não é mais necessário mostrar a coluna `cursopreferido`*/
-- Sempre que utilizar o comando JOIN, é necessário também utilizar o comando ON, e quando declarar somente o comando “JOIN”, o sistema entenderá como “INNER JOIN”
UPDATE `cadastro`.`gafanhotos` SET `cursopreferido` = '1' WHERE (`id` = '14');	-- muda o campo `cursopreferido` de nulo para 1 no `id` 14, assim, declara que a aluna Rosana cursa HTML5
SELECT gafanhotos.nome, cursos.nome, cursos.ano FROM gafanhotos JOIN cursos ON gafanhotos.cursopreferido = cursos.idcurso ORDER BY gafanhotos.nome;	-- ordenou por ordem alfabética

/*Apelidando colunas (criando um ALIAS) com o comando "AS"		assim, as linhas de comando não ficam tão grandes*/
 SELECT g.nome, c.nome, c.ano FROM gafanhotos AS G JOIN cursos AS C ON g.cursopreferido = c.idcurso ORDER BY g.nome;	-- O comando AS também pode ser omitido
 
 /***************OUTER JOIN***************/
 /*junta as tabelas e mostra todos os dados, até mesmo aqueles que não tem relações*/ 
SELECT g.nome, c.nome, c.ano FROM gafanhotos AS g LEFT OUTER JOIN cursos AS c ON c.idcurso = g.cursopreferido;	/*como `gafanhotos` está à esquerda do JOIN ...
então será dada a preferência, ou seja, serão exibidos todos os dados da tabela `gafanhotos` (inclusive aqueles que não tem relação com outra a tabela*/
 SELECT g.nome, c.nome, c.ano FROM gafanhotos AS g RIGHT OUTER JOIN cursos AS c ON c.idcurso = g.cursopreferido ORDER BY c.nome;	/*agora dá preferência ao lado direito 
 do JOIN (tabela cursos), assim, serão exibidos todos os cursos, inclusive aqueles que nenhum aluno prefere*/
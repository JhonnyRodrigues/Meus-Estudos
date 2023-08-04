/*criando relacionamentos de muitos para muitos, ou n pra n:
Nesse caso, é preciso criar uma terceira tabela, que irá receber as chaves estrangeiras da tabela `cursos` e da tabela `gafanhotos`*/
CREATE TABLE gafanhoto_assiste_curso (
id INT NOT NULL AUTO_INCREMENT,	-- O NOT NULL aqui é opcional pois quando ele se tornar a chave primária, automaticamente ele se tornará not null
data DATE,
idgafanhoto int,
idcurso int,
PRIMARY KEY(id),
FOREIGN KEY (idgafanhoto) REFERENCES gafanhotos(id),	-- O campo `idgafanhoto` dessa tabela, que está sendo criada, se referencia ao campo `id` da tabela gafanhotos
FOREIGN KEY (idcurso) REFERENCES cursos(idcurso)		-- Note que os ´idcurso` são diferentes, embora com o mesmo nome, um pertence à tabela nova e outro à tabela cursos
) DEFAULT CHARSET = utf8mb4;	-- A palavra DEFAULT é opcional

SELECT * FROM cursos;
SELECT * FROM gafanhotos;
DESC cursos;
DESC gafanhotos;
DESC gafanhoto_assiste_curso;	-- Verifique que a tabela tem 1 PK e 2 FK

INSERT INTO gafanhoto_assiste_curso VALUES (DEFAULT, '2014-03-01', 1, 2);	-- Inserindo dados na tabela, a palavra default pode ser omitida
SELECT * FROM gafanhoto_assiste_curso;
INSERT INTO `cadastro`.`gafanhoto_assiste_curso` (`data`, `idgafanhoto`, `idcurso`) VALUES ('2015-12-22', '3', '6');
INSERT INTO `cadastro`.`gafanhoto_assiste_curso` (`data`, `idgafanhoto`, `idcurso`) VALUES ('2014-01-01', '22', '12');
INSERT INTO `cadastro`.`gafanhoto_assiste_curso` (`data`, `idgafanhoto`, `idcurso`) VALUES ('2016-05-12', '1', '19');
SELECT * FROM gafanhoto_assiste_curso;	-- O problema desse SELECT é que aparece um monte de número, falta clareza no que está mostrando

/*juntando mais de 2 tabelas*/
SELECT g.id, g.nome, a.idgafanhoto, idcurso FROM gafanhotos G JOIN gafanhoto_assiste_curso A ON g.id = a.idgafanhoto ORDER BY g.nome;	/*Perceba que, por causa da relação
de chaves estrangeiras, os campos `id` e `idgafanhoto` são iguais. Perceba também que o comando AS pode ser omitido*/

SELECT g.nome, c.nome FROM gafanhotos g JOIN gafanhoto_assiste_curso a ON g.id = a.idgafanhoto JOIN cursos c ON a.idcurso = c.idcurso ORDER BY g.nome;
-- Puxando dados de 3 tabelas, usando 2 JOINS, o comando mostra os alunos e seus respectivos cursos assistidos

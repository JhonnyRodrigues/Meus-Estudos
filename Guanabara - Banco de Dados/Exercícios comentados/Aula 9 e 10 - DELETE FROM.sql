USE exemplo;	
SHOW DATABASES;
#STATUS;			-- comando válido somente no terminal/prompt
SHOW TABLES;	-- mostra as tabelas existentes dentro do BD aberto
SHOW ENGINES;	-- Apresenta breves comentários sobre os motores de armazenamentos disponíveis
SHOW CREATE TABLE amigos;	-- Esse comando é usado principalmente no console e mostra o comando utilizado para criar a tabela `amigos`
SHOW CREATE DATABASE exemplo;

DESC cursos;	-- descreve a estrUtura da tabela
DESC gafanhotos;
SELECT * FROM gafanhotos;	-- Mostra todos os registros, não esqueça do FROM!
UPDATE cursos SET nome = 'PhotoShop' WHERE idcurso = 3;	-- Altera o nome do campo/coluna

ALTER TABLE `amigos` ADD `idade` INT NOT NULL AFTER `Nome`;	-- Adiciona, na tabela `amigos`, a coluna `idade` após a coluna `nome` (não cadastre idade em BD, cadastre data_nasc
ALTER TABLE amigos DROP idade;
ALTER TABLE `amigos` ADD `Sexo` ENUM ('M', 'F') NOT NULL AFTER `Telefone`;	-- Adiciona a coluna `sexo`
ALTER TABLE `amigos` CHANGE `Telefone` `Telefone` VARCHAR(11) AFTER `Sexo`; -- altera a posição do campo `telefone` para depois do campo `sexo`

INSERT INTO `amigos` (`id`, `Nome`, `Sexo`, `Telefone`) VALUES (NULL, 'Maria', 'F', '2222-3333'), (NULL, 'João', '', '2222-3333');
INSERT INTO `amigos` (`id`, `Nome`, `Sexo`, `Telefone`) VALUES (NULL, 'José', 'M', '3333-4444'), (NULL, 'Ana', 'F', '1111-2222');

UPDATE `amigos` SET `Sexo` = 'M' WHERE `amigos`.`id` = 2;

DELETE FROM `amigos` WHERE `amigos`.`id` = 4;	-- Apaga a tupla/registro/linha

SELECT * FROM amigos;
DROP TABLE `amigos`;	-- o DROP TABLE apaga a coluna e os dados, se quiser apagar só os registros, utilize o comando TRUNCATE
DROP DATABASE `exemplo`;
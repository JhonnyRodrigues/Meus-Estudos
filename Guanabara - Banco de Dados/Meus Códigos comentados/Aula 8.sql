USE `cadastro`;	-- abre o BD cadastro
SELECT * FROM cursos;
SELECT * FROM gafanhotos;
DESC cursos;	-- descreve a estrtura da tabela cursos
DESCRIBE gafanhotos;
SHOW TABLES;	-- mostra as tabelas do Banco de Dados aberto

/************************************************************
foi gerado um Dump(backup) do BD `cadastro`, em arquivo único
************************************************************/

DROP DATABASE cadastro; -- apaga o fucking BD!

-- Devido a um Bug do Workbench, foi necessário editar 2 linhas no topo do arquivo gerado (usei o Notepad++), para só então conseguir importar o Dump
-- As linhas adicionadas foram essas: 	CREATE DATABASE cadastro; 	USE cadastro;
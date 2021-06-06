-- foi feito o Dump de um BD `cadastro` pelo site do cursoemvideo, link: https://www.cursoemvideo.com/course/mysql/aulas/banco-de-dados/modulos/exercicio-para-curso-de-mysql/

USE cadastro;
SELECT * FROM cursos ORDER BY nome; -- O (*) representa todas as colunas
SELECT * FROM gafanhotos;	-- Sem nenhum parâmetro, ele ordena pela chave primária

/*filtrando e ordenando colunas*/
SELECT * FROM cursos ORDER BY nome DESC;	-- ordena a busca por ordem alfabética descendente (DESC pode ser omitido pois já vem como padrão)
SELECT nome, carga, ano FROM cursos;		-- Filtra as colunas, mostrando apenas 3
SELECT ano, nome, carga FROM cursos ORDER BY ano, nome;	-- Muda a sequência de colunas a serem mostradas; ordenando por ano e depois por nome

/*filtrando linhas*/
SELECT * FROM  cursos WHERE ano = 2016 ORDER BY nome;	-- as apas no ano são opcionais, sendo obrigatórias nas strings/char
SELECT nome, carga FROM cursos WHERE ANO = '2016' ORDER BY nome;	-- Filtra pela coluna `ano` que nem faz parte do Resultset(resultado de consulta)

/*utilizando operadores*/
SELECT nome, descricao FROM cursos WHERE ano != 2015 ORDER BY nome, ano;	-- utilizando operadores RELACIONAIS, neste caso, o operador DIFERENTE também pode ser "<>"
SELECT nome, ano FROM cursos WHERE ano BETWEEN 2014 AND 2016 ORDER BY ano DESC, nome;  -- O comando BETWEEN apresenta uma FAIXA dos campos declarados
SELECT nome, descricao, ano FROM cursos WHERE ano IN (2014,2016) ORDER BY ano;	-- O comando IN apresenta somente os campos declarados entre parênteses

/*utilizando operadores lógicos*/
SELECT nome, carga, totaulas FROM cursos WHERE carga > 35 AND totaulas < 30;

/*utilizando o operador LIKE, de semelhanças*			o "%" é coringa e significa: nenhum ou vários caracteres*		o "_" significa: whatever caractere*/
SHOW TABLE STATUS;	-- com esse comando, percebi que a COLLATION da tabela está configurada como CaseInsensitive(CI), não diferenciando letras maiúsculas de minúsculas
SELECT * FROM cursos WHERE nome LIKE 'p%' ORDER BY nome;	-- Apresenta todas as tuplas do campo `nome` que COMEÇAM com 'P'
SELECT * FROM cursos WHERE nome LIKE '%a';	-- Apresentam todas as tuplas do campo `nome` que TERMINAM  com 'a'
SELECT * FROM cursos WHERE nome LIKE '%a%';	-- Seleciona todos os registros do campo `nome` que tenham 'a' em QUALQUER posição, inclusive no início ou final*/
SELECT * FROM cursos WHERE nome NOT LIKE '%a%';	-- Seleciona todos os registros do campo `nome` que NÃO tenham 'a' em posição alguma*/
SELECT * FROM cursos WHERE nome LIKE 'PH%P';
SELECT * FROM cursos WHERE nome LIKE 'PH%P%';
SELECT * FROM cursos WHERE nome LIKE 'PH%P_';	-- O UNDERLINE exige que tenha 1 caractere no final, contando 1 posição
SELECT * FROM cursos WHERE nome LIKE 'PH%p_';	-- começa com 'ph', tem qualquer coisa no meio, termina com 'p' seguido de uma posição de alguma coisa
SELECT * FROM gafanhotos WHERE nome LIKE '%SILVA%';	-- seleciona qualquer pessoa com o fragmento 'silva' no nome (inclusive silvana)
SELECT * FROM gafanhotos WHERE nome LIKE '%_SILVA%';	-- nesse caso, seleciona somente pessoas que tenham sobrenome silva
SELECT * FROM gafanhotos WHERE nome LIKE '%SILVA';	-- seleciona somente os nomes que terminam com o sobrenome silva
SELECT * FROM gafanhotos WHERE nome LIKE 'SILVA%';	-- seleciona somente a Silvana, que começa com 'silva'

/*Comando DISTINCT, para distinguir (ele não agrupa!). Ele considera apenas uma ocorrência, de cada valor dentro do registro*/
SELECT DISTINCT nacionalidade FROM gafanhotos ORDER BY nacionalidade;	-- apresenta uma lista sem repetição das nacionalidades, mostrando quantos tipos foram cadastradas
SELECT DISTINCT carga FROM cursos ORDER BY carga;	-- todas as opções de carga horária

/*utilizando FUNÇÔES de Agregação*/
SELECT count(*) FROM cursos;	-- A função COUNT conta quantos registros tem em `cursos`
SELECT count(*) FROM cursos WHERE carga > 40;	-- Usando filtro
SELECT max(carga) FROM cursos;	-- A função MAX identifica o maior valor
SELECT max(totaulas) FROM cursos WHERE ano = '2016';	-- Dentre os cursos de 2016, o curso com maior nº de aulas teve 35 aulas
SELECT min(totaulas) FROM cursos WHERE ANO = '2016';	-- A função MIN identifica o MENOR valor
SELECT sum(totaulas) FROM cursos WHERE ano = '2016';	-- A função SUM soma os valores
SELECT avg(totaulas) FROM cursos;	-- A função AVG calcula a média
DELETE FROM gafanhotos WHERE nome LIKE 'Jonatas Rodrigues%' LIMIT 1;

/*********************EXERCÍCIOS************************/

SELECT* FROM gafanhotos;
SELECT nome FROM gafanhotos WHERE sexo = 'F' ORDER BY nome;	-- Uma lista com o nome de todas as gafanhotAs
SELECT * FROM gafanhotos WHERE nascimento BETWEEN '2000-01-01' AND '2015-12-31' ORDER BY nascimento desc;	-- Lista dos nascidos entre 2000 e 2015
SELECT nome, profissao FROM gafanhotos WHERE sexo = 'M' AND profissao LIKE 'programador%' ORDER BY nome;		-- Lista de homens programadores
SELECT nome, sexo, nacionalidade FROM gafanhotos WHERE sexo = 'F' AND nacionalidade = 'Brasil' AND nome LIKE 'J%' ORDER BY nome; -- mulheres, Brs, com nome começando com J
SELECT nome, nacionalidade FROM gafanhotos WHERE sexo = 'M' AND nome LIKE '%silva%' AND nacionalidade NOT LIKE 'Brasil%' AND peso < 100; -- homens, silva, gringos, <100Kg
SELECT max(altura) FROM gafanhotos WHERE sexo = 'M' AND nacionalidade LIKE 'brasil';	-- A maior altura masculina dos Brasileiros
SELECT avg(peso) FROM gafanhotos;	-- Média de peso dos gafanhotos cadastrados
SELECT min(peso) FROM gafanhotos WHERE sexo = 'F' AND nacionalidade NOT LIKE 'Brasil%' AND nascimento BETWEEN '1990-01-01' AND '2000-12-31';	-- Menor peso da mulher gringa
SELECT count(*) FROM gafanhotos WHERE sexo = 'F' AND altura > 1.90;	-- Quantas mulheres tem mais de 1.90 de altura?

/**********************************/
/*Agrupando registros com GROUP BY*/
SELECT * FROM cursos;
SELECT DISTINCT carga FROM cursos ORDER BY carga;	-- Mostra as diferentes/distintas cargas horárias
SELECT carga FROM cursos GROUP BY carga ORDER BY carga;	/-- Agrupa as cargas horárias, embora tenha a mesma view do comando anterior, ainda
SELECT count(carga), carga FROM cursos GROUP BY carga ORDER BY carga;	-- Utiliza a função COUNT para mostrar a quantidade de cursos por carga horária

/*(Utilizando comando HAVING				(having está para group by, assim como, where está para o select)*/
SELECT ano, count(*) FROM cursos GROUP BY ano HAVING count(ano) >=5 ORDER BY count(*) ASC;	-- Só agrupa os anos que tem 5 ou mais cursos
SELECT ano, count(*) FROM cursos GROUP BY ano HAVING ano >= 2014;	-- Só mostra a contagem de cursos por ano, a partir de 2014
SELECT ano, count(*) FROM cursos WHERE totaulas > 30 GROUP BY ano HAVING ano > 2013 ORDER BY count(*) ASC;	/*Selecionar(SELECT), Filtrar(WHERE),
 Agrupar essa seleção já filtrada(GROUP BY) e dizer, dentro desse agrupamento(HAVING), quais dados você quer exibir, ordenados ascendentemente (ORDER BY ASC)*/
SELECT AVG(carga) FROM cursos;	-- média
SELECT carga, count(*) FROM cursos WHERE ano > 2015 GROUP BY carga HAVING carga > (SELECT avg(carga) FROM cursos);	-- seleciona, filtra, agrupa, mostra os resultados acima da média

/*****************EXERCÍCIOS******************************/

SELECT count(*), profissao  FROM gafanhotos GROUP BY profissao ORDER BY count(*);	-- Lista agrupada contando as profissões
SELECT count(*), sexo FROM gafanhotos WHERE nascimento > '2005-01-01' GROUP BY sexo ORDER BY nascimento;	-- Homens e mulheres nascidos após 1º de janeiro de 2005
SELECT nacionalidade, count(*) FROM gafanhotos WHERE nacionalidade NOT LIKE 'BRasil%' GROUP BY nacionalidade HAVING count(nacionalidade) > 3 ORDER BY count(*); -- Lista (com valores >3) dos gringos
SELECT altura, count(*) FROM gafanhotos WHERE peso > 100 GROUP BY altura HAVING altura > (SELECT avg(altura) FROM gafanhotos) ORDER BY altura;	-- Pessoas agrupadas por altura, com peso >100 e altura maior que a média
USE CADASTRO;	-- abre o BD cadastro

INSERT INTO pessoas	-- (lê-se "insãrt intwo") é o comando para inserir valores na tabela `pessoas`*/
(NOME, NASCIMENTO, SEXO, PESO, ALTURA, NACIONALIDADE)	-- não utilize(;) pois não é o fim do comando ainda (e NÃO É necessário informar o 'id' pois ele é auto-incrementável)
VALUES
('Godofredo', '1984-01-02', 'M', '78.5', '1.84', 'Brasil');	-- strings ficam entres aspas simples, o sinal separador decimal é o ponto(.)

INSERT INTO pessoas (ID, NOME, NASCIMENTO, SEXO,PESO, ALTURA, NACIONALIDADE) -- pode ser escrito tudo na mesma linha, o importante é o (;) no final do comando
VALUES (DEFAULT, 'Maria','1971-06-13','F', '62.5', '1.70', DEFAULT); -- caso opte por declarar o ID, deixe-o como default(padrão), assim como a nacionalidade

INSERT INTO pessoas VALUES (default,'João', '1984-07-14', 'M', '89.3','1.80', 'Portugal'); -- se a declaração seguir a ordem das colunas, não é necessário declará-las

-- Também tem como inserir vários registros com um único comando, é só separá-los por vírgulas, deixando o (;) para o fim do comando. Veja abaixo:
INSERT INTO pessoas VALUES
(DEFAULT, 'Ana', '1975-12-22', 'F', '52.3', '1.45', 'EUA'),
(DEFAULT, 'Pedro', '2000-07-15', 'M', '69.5', '1.75', 'Brasil'),
(DEFAULT, 'Joana', '1999-05-01', 'F', '67.3', '1.75', 'Espanha');	-- atenção para o ponto-e-vírgula

SELECT * FROM pessoas;	-- comando para exibir todos(*) os registros da tabela `pessoas`
create TABLE aluno_Dois(
id int not NULL PRIMARY KEY AUTO_INCREMENT,
nome varchar(50),
fone varchar(20),
data DATE);

CREATE INDEX idx_nome_aluno on aluno(nome);
CREATE INDEX idx_fone_aluno on aluno(fone);
CREATE INDEX idx_data_aluno on aluno(data);

alter TABLE aluno ADD INDEX idx_nome_aluno (nome);
alter table aluno add INDEX idx_fone_aluno (fone);
alter table aluno add INDEX idx_data_aluno (data);

alter TABLE aluno_dois ADD INDEX idx_nome_aluno (nome);


drop INDEX idx_nome_aluno on aluno;
ALTER TABLE aluno drop INDEX idx_nome_aluno;


drop table aluno;

CREATE TABLE aluno (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(50),
  email varchar(50),
  sexo varchar(50),
  data date);
  
  create index idx_nome_aluno on aluno(nome);  
  
  alter table aluno add index idx_sexo_aluno (sexo);
  
  drop index idx_nome_aluno on aluno;
  
  drop table aluno;
  

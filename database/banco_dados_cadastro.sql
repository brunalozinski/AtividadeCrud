#CRIAR O BANCO DE DADOS:
create database dadosCadastro;

#HABILITAR O BANCO DE DADOS:
use dadosCadastro;

#CRIAR A TABELA DE PESSOAS NO BANCO DE DADOS:
create table tbl_dadosUsuario(
cod_pessoa int unsigned auto_increment primary key,
nome varchar(500) not null,
sobrenome varchar(500) not null,
email varchar(500) not null,
celular varchar(500) not null
);

insert into tbl_dadosUsuario (nome, sobrenome, email, celular) VALUES ('Bruna', 'Lozinski', 'lozinskibruna@gmail.com', '11959536779');
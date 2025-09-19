create schema cadastro;

create table usuario(
    nome VARCHAR(45) NOT NULL,
    senha VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    cpf VARCHAR(45) NOT NULL,
    data VARCHAR(45) NOT NULL,
    PRIMARY KEY (cpf)
)
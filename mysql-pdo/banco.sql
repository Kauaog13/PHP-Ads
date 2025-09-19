-- Criação do Banco de dados

CREATE SCHEMA `php`;

-- Criação da tabela

CREATE TABLE `php`.`alunos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `ultimonome` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
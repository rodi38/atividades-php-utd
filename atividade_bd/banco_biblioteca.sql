CREATE DATABASE `biblioteca`;


CREATE TABLE `categorias`(
    `id_categoria` INT(2) PRIMARY KEY AUTO_INCREMENT,
    `categoria_nome` VARCHAR(15) NOT NULL,
    `categoria_criadoem` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `alunos`(
    `id_aluno` INT(5) PRIMARY KEY AUTO_INCREMENT,
    `aluno_nome` VARCHAR(60) NOT NULL,
    `aluno_email` VARCHAR(35) NOT NULL,
    `aluno_dtnasc` DATE NOT NULL,
    `aluno_cpf` VARCHAR(20) UNIQUE KEY NOT NULL,
    `aluno_tel` VARCHAR(20) NOT NULL,
    `aluno_criadoem` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `funcionarios`(
    `id_funcionario` INT(2) PRIMARY KEY AUTO_INCREMENT,
    `funcionario_nome` VARCHAR(60) NOT NULL,
    `funcionario_email` VARCHAR(50) NOT NULL,
    `funcionario_dtnasc` DATE NOT NULL,
    `funcionario_cpf` VARCHAR(20) UNIQUE KEY NOT NULL,
    `funcionario_tel` VARCHAR(20) NOT NULL,
    `funcionario_criadoem` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE `livros`(
    `id_livro` INT(6) PRIMARY KEY AUTO_INCREMENT,
    `livro_nome` VARCHAR(60) NOT NULL,
    `livro_autor` VARCHAR(50) NOT NULL,
    `livro_codigo` VARCHAR(15) UNIQUE KEY NOT NULL,
    `livro_estoque` INT(3) NOT NULL,
    `livro_valor` FLOAT(5, 2) NOT NULL,
    `categoria_id` INT(2) NOT NULL,
    `livro_criadoem` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



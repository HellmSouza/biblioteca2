CREATE DATABASE `biblioteca`;

CREATE TABLE `biblioteca`.`autores` (`id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(100) NOT NULL , `telefone` VARCHAR(40) NOT NULL , PRIMARY KEY (`id`));

CREATE TABLE `biblioteca`.`livros` (`id` INT NOT NULL AUTO_INCREMENT , `autor_id` INT NOT NULL , `nome` VARCHAR(100) NOT NULL , `data_lancamento` DATE NOT NULL, PRIMARY KEY (`id`));

ALTER TABLE `livros` ADD CONSTRAINT `fk_autor_id` FOREIGN KEY ( `autor_id` ) REFERENCES `autores` ( `id` );

CREATE TABLE `biblioteca`.`locacoes` (`id` INT NOT NULL AUTO_INCREMENT , `livro_id` INT NOT NULL , `cliente_nome` VARCHAR(100) NOT NULL , `cliente_email` VARCHAR(100) NOT NULL, `data_locacao` DATE NOT NULL, `data_prevista` DATE NOT NULL, `data_devolucao` DATE NOT NULL, `valor_multa` DECIMAL(9,2) NOT NULL, PRIMARY KEY (`id`));

ALTER TABLE `locacoes` ADD CONSTRAINT `fk_livro_id` FOREIGN KEY ( `livro_id` ) REFERENCES `livros` ( `id` );
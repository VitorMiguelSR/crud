CREATE DATABASE crud_produtos;
USE crud_produtos;

CREATE TABLE produtos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    categoria ENUM('peças', 'serviço') NOT NULL,
    preço DECIMAL (10, 2) NOT NULL,
    quantidade INT NOT NULL
);
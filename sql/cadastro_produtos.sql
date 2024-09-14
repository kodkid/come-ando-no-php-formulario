DROP DATABASE IF EXISTS cadastro_produtos;
CREATE DATABASE IF NOT EXISTS cadastro_produtos;


CREATE TABLE IF NOT EXISTS cadastro_produtos.produto(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    descricao TEXT ,
    preco FLOAT ,
    qtdEstoque INTEGER 
);




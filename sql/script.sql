DROP TABLE IF EXISTS cadastro_produtos.produto;

CREATE TABLE IF NOT EXISTS cadastro_produtos.produto(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    descricao TEXT ,
    preco FLOAT ,
    qtdEstoque INTEGER 
);

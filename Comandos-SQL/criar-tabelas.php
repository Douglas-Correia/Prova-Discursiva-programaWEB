<?php 

CREATE TABLE cadastro_empresas (
    cnpj VARCHAR(14) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    PRIMARY KEY (cnpj)
);

CREATE TABLE cadastro_produtos (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome_produto VARCHAR(50) NOT NULL,
    quantidade INT(11) NOT NULL,
    data_entrada DATE NOT NULL,
    valor DECIMAL(10,2) NOT NULL,
    cnpj VARCHAR(14) NOT NULL,
    PRIMARY KEY (id),
    INDEX (cnpj),
    FOREIGN KEY (cnpj) REFERENCES cadastro_empresas(cnpj) ON UPDATE CASCADE ON DELETE RESTRICT
);
/*Na tabela cadastro_empresas, estamos criando as colunas cnpj, nome, enderecoe telefone, além de definir a coluna cnpjcomo chave primária.

Na tabela cadastro_produtos, estamos criando as colunas id, nome_produto, quantidade, data_entrada, valore cnpj. A coluna idé a chave primária, enquanto a coluna cnpjé a chave estrangeira que referencia a tabela cadastro_empresas. Além disso, estamos adicionando um índice na coluna cnpje definindo a restrição FOREIGN KEY com as cláusulas ON UPDATE CASCADEe ON DELETE RESTRICT.

Com essas duas tabelas criadas, você pode inserir dados na tabela cadastro_empresase depois usá-los como referência para inserir dados na tabela cadastro_produtos.  
para inserir uma nova empresa e um novo produto, comandos SQL: */
//Inserir uma nova empresa

INSERT INTO cadastro_empresas (cnpj, nome, endereco, telefone) VALUES ('12345678901234', 'Minha Empresa', 'Rua das Flores, 123', '(11) 1234-5678');

// Inserir um novo produto, referenciando a empresa inserida anteriormente
INSERT INTO cadastro_produtos (nome_produto, quantidade, data_entrada, valor, cnpj) VALUES ('Produto 1', 10, '2023-05-07', 9.99, '12345678901234');


?>
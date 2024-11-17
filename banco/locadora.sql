DROP DATABASE locadora;

CREATE database locadora;
USE locadora;

CREATE TABLE endereco (
    `id_endereco` int AUTO_INCREMENT,
    `endereco` varchar(255) DEFAULT NULL,
    `id_cliente` int DEFAULT NULL,
    `id_locadora` int DEFAULT NULL,
    PRIMARY KEY (`id_endereco`),
    FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
    FOREIGN KEY (`id_locadora`) REFERENCES `locadora` (`id_locadora`)
);

CREATE TABLE locadora (
    id_locadora INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cnpj VARCHAR(20) NOT NULL,
    id_endereco INT,
    FOREIGN KEY (id_endereco) REFERENCES Endereco(id_endereco)
);

CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    data_nascimento DATE NOT NULL,
    numero_cnh VARCHAR(20) NOT NULL,
    id_endereco INT,
    FOREIGN KEY (id_endereco) REFERENCES Endereco(id_endereco)
);

CREATE TABLE veiculo (
    id_veiculo INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    placa VARCHAR(10) NOT NULL,
    valor_diaria DECIMAL(10, 2) NOT NULL,
    ano_fabricacao YEAR NOT NULL,
    cor VARCHAR(50) NOT NULL,
    modelo VARCHAR(100) NOT NULL
);

CREATE TABLE locacao (
    id_locacao INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_veiculo INT,
    data_inicial DATE NOT NULL,
    data_final DATE NOT NULL,
    valor_total DECIMAL(8, 2) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente),
    FOREIGN KEY (id_veiculo) REFERENCES Veiculo(id_veiculo)
);

CREATE TABLE telefone (
    id_telefone INT AUTO_INCREMENT PRIMARY KEY,
    numero VARCHAR(20) NOT NULL,
    id_cliente INT,
    id_locadora INT,
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente),
    FOREIGN KEY (id_locadora) REFERENCES Locadora(id_locadora) 
);

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    papel ENUM('ADMINISTRADOR', 'CLIENTE') NOT NULL,
    id_cliente INT,
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente)
);

SHOW TABLES;

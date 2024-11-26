DROP DATABASE locadora;

CREATE DATABASE locadora;

USE locadora;

CREATE TABLE locadora (
    codigo_locadora int auto_increment PRIMARY KEY,
    nome_locadora varchar (50),
    cnpj_locadora varchar (14) not null
);

CREATE TABLE cliente (
    codigo_cliente int auto_increment PRIMARY KEY,
    nome_cliente varchar (50) not null,
    data_nascimento_cliente date,
    numero_cnh_cliente varchar (11) not null
);

CREATE TABLE locacao (
    codigo_locacao int auto_increment PRIMARY KEY,
    data_inicial_locacao date not NULL,
    data_final_locacao date not NULL,
    valor_final_locacao DECIMAL (6,2) NOT NULL,
    codigo_cliente int not null,
    codigo_veiculo int not null
);

CREATE TABLE veiculo (
    codigo_veiculo int auto_increment PRIMARY KEY,
    nome_veiculo varchar (40) not null,
    placa_veiculo varchar(8) not null,
    valor_diaria_veiculo DECIMAL (6,2) not null,
    ano_fabricacao_veiculo varchar (4) not null,
    cor_veiculo varchar (12) not null,
    modelo_veiculo varchar (30) not null
);

CREATE TABLE endereco (
    codigo_endereco int auto_increment PRIMARY KEY,
    nome_endereco varchar(50) not null,
    codigo_cliente int,
    codigo_locadora int,
    tipo_endereco varchar (50) null
);

CREATE TABLE telefone (
    codigo_telefone int auto_increment PRIMARY KEY,
    numero_telefone varchar (13) not null,
    codigo_cliente int,
    codigo_locadora int
);

CREATE TABLE usuario (
	 codigo_usuario INT AUTO_INCREMENT,
	 email VARCHAR (50) NOT NULL,
	 senha VARCHAR (20) NOT NULL,
	 tipo_usuario ENUM('cliente','adm'),
	 codigo_cliente INT,
	 PRIMARY KEY(codigo_usuario)
);
 
ALTER TABLE endereco ADD CONSTRAINT FK_endereco_2
    FOREIGN KEY (codigo_cliente)
    REFERENCES cliente (codigo_cliente);
 
ALTER TABLE endereco ADD CONSTRAINT FK_endereco_3
    FOREIGN KEY (codigo_locadora)
    REFERENCES locadora (codigo_locadora);
 
ALTER TABLE telefone ADD CONSTRAINT FK_telefone_2
    FOREIGN KEY (codigo_cliente)
    REFERENCES cliente (codigo_cliente);
 
ALTER TABLE telefone ADD CONSTRAINT FK_telefone_3
    FOREIGN KEY (codigo_locadora)
    REFERENCES locadora (codigo_locadora);
    
ALTER TABLE usuario ADD CONSTRAINT fk_codigo_cliente
	FOREIGN KEY (codigo_cliente) 
	REFERENCES cliente(codigo_cliente);

alter table locacao add constraint fk_codigo_cliente2 foreign KEY (codigo_cliente) REFERENCES cliente (codigo_cliente);

alter table locacao add constraint fk_codigo_veiculo foreign KEY (codigo_veiculo) REFERENCES veiculo(codigo_veiculo);

insert into usuario (email, senha, tipo_usuario, codigo_cliente)
values('admin@gmail.com', 123456789, 'adm', NULL);


INSERT INTO veiculo (nome_veiculo, placa_veiculo, valor_diaria_veiculo, ano_fabricacao_veiculo, cor_veiculo, modelo_veiculo) 
VALUES ('Fiat Mobi', 'ABC1234', 150.00, '2015', 'Branco', 'Mobi 1.0');
INSERT INTO veiculo (nome_veiculo, placa_veiculo, valor_diaria_veiculo, ano_fabricacao_veiculo, cor_veiculo, modelo_veiculo) 
VALUES ('Fiat Uno', 'BFC1234', 150.00, '2015', 'Branco', 'Uno 1.0');
INSERT INTO veiculo (nome_veiculo, placa_veiculo, valor_diaria_veiculo, ano_fabricacao_veiculo, cor_veiculo, modelo_veiculo) 
VALUES ('Renault Kwid', 'XYZ5678', 150.00, '2020', 'Branco', 'Kwid 2.0');



INSERT INTO veiculo (nome_veiculo, placa_veiculo, valor_diaria_veiculo, ano_fabricacao_veiculo, cor_veiculo, modelo_veiculo) 
VALUES ('Volkswagen T-Cross', 'BVZ5678', 230.00, '2020', 'Branco', 'T-cross 2.0');
INSERT INTO veiculo (nome_veiculo, placa_veiculo, valor_diaria_veiculo, ano_fabricacao_veiculo, cor_veiculo, modelo_veiculo) 
VALUES ('Hyundai Creta', 'ASZ5678', 250.00, '2021', 'Branco', 'Creta 2.0');
INSERT INTO veiculo (nome_veiculo, placa_veiculo, valor_diaria_veiculo, ano_fabricacao_veiculo, cor_veiculo, modelo_veiculo) 
VALUES ('Crevrolet Tracker', 'ZDZ5678', 270.00, '2023', 'Branco', 'Tracker 2.0');



INSERT INTO veiculo (nome_veiculo, placa_veiculo, valor_diaria_veiculo, ano_fabricacao_veiculo, cor_veiculo, modelo_veiculo) 
VALUES ('Fiat Doblo', 'XFZ5678', 280.00, '2023', 'Branco', 'Doblo 2.0');
INSERT INTO veiculo (nome_veiculo, placa_veiculo, valor_diaria_veiculo, ano_fabricacao_veiculo, cor_veiculo, modelo_veiculo) 
VALUES ('Citroen Jumpy', 'DDZ5678', 280.00, '2023', 'Branco', 'Jumpy 3.0');
INSERT INTO veiculo (nome_veiculo, placa_veiculo, valor_diaria_veiculo, ano_fabricacao_veiculo, cor_veiculo, modelo_veiculo) 
VALUES ('Hyundai HR', 'XAG5678', 300.00, '2013', 'Branco', 'HR 2.0');

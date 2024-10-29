CREATE SCHEMA Projeto_Integrador;

CREATE TABLE Funcionarios(
	IdFuncionario int AUTO_INCREMENT PRIMARY KEY,
    Nome Varchar(255),
    Cargo Varchar(255),
    Cpf Varchar(20),
    Telefone Varchar(20),
    Endereco Varchar(255)
);

CREATE TABLE Produtos(
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(255),
    DataDeValidade VARCHAR(100),
    Quantidade int,
    Lote VARCHAR(255),
    Marca VARCHAR(255), 
    Preco float
);
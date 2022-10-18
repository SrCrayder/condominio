-- Linha que apaga o bando de dados se ele for existente, utilizar apenas nos testes!!!
DROP DATABASE IF EXISTS condominio;
-- Cria e seta o banco de dados para utf-8(abrangente da lingua pt-br)
CREATE DATABASE condominio CHARACTER SET utf8 COLLATE utf8_general_ci;
-- Ponhe o banco de dados para ser utilizado
USE condominio;
-- Cria a tabela morador
CREATE TABLE funcionarios (
id INT PRIMARY KEY AUTO_INCREMENT,
CPF VARCHAR(15) NOT NULL,
nome VARCHAR(80) NOT NULL,
tel VARCHAR(15) NOT NULL,
senha VARCHAR(20) NOT NULL,
email VARCHAR(80) NOT NULL
);
-- Cria a tabela apartamento
CREATE TABLE apartamento(
    id INT PRIMARY KEY AUTO_INCREMENT,
    bloco INT NOT NULL,
    numero INT NOT NULL,
    andar INT NOT NULL,
    dono VARCHAR (200) NOT NULL
);
-- Cria a tabela morador
CREATE TABLE morador(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL,
    cpf VARCHAR (20) NOT NULL,
    tel VARCHAR (20) NOT NULL,
    conta_cond VARCHAR (300) NOT NULL,
    apt INT,
    veiculo ENUM ('Sim', 'Não') NOT NULL,
    FOREIGN KEY (apt) REFERENCES apartamento (id)

);
-- Cria a tabela portaria
CREATE TABLE portaria(
  func VARCHAR (100) NOT NULL,
  cpf VARCHAR (20) NOT NULL,
  turno ENUM('Manhã', 'Tarde', 'Noite') NOT NULL,
  correio TEXT NOT NULL

);
-- Cria a tabela limpeza
CREATE TABLE limpeza(
    func VARCHAR (100) NOT NULL,
    cpf VARCHAR (20) NOT NULL,
    escala_bloco VARCHAR (100)NOT NULL,
    registro TEXT
);
-- Cria a tabela admnistração
CREATE TABLE administracao( 
    func VARCHAR (100) NOT NULL,
    cpf VARCHAR (20) NOT NULL,
    senha VARCHAR (100) NOT NULL,
    dia_atendimento DATE NOT NULL
);
-- Cria a tabela segurança
CREATE TABLE seguranca(
  func VARCHAR (100) NOT NULL,
  cpf VARCHAR (20) NOT NULL,
  turno ENUM('Manhã', 'Tarde', 'Noite') NOT NULL,
  relatorio TEXT
);
-- Cria a tabela estacionamento
CREATE TABLE estacionamento( 
    qtd_vaga INT NOT NULL,
    qtd_disponivel INT NOT NULL,
    numero_vaga INT NOT NULL,
    placa_carro VARCHAR (10) NOT NULL
);
-- Cria a tabela salão
CREATE TABLE salao(
    agenda TEXT NOT NULL,
    dispobilidade ENUM ('Sim', 'Não'),
    tempo_alugado VARCHAR (30) NOT NULL,
    locatario INT NOT NULL,
    FOREIGN KEY (locatario) REFERENCES morador (id)

);
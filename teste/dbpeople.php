
CREATE DATABASE exemplo_db;
USE exemplo_db;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    data_nascimento DATE,
    cpf VARCHAR(14),
    genero ENUM('Masculino', 'Feminino', 'Outro'),
    cidade VARCHAR(100),
    bairro VARCHAR(100),
    rua VARCHAR(100),
    numero VARCHAR(10),
    complemento VARCHAR(100)
);

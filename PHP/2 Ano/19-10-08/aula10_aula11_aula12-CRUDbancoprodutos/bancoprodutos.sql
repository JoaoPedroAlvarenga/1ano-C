CREATE TABLE produtos (
cor varchar(30),
id int NOT NULL UNIQUE,
marca varchar(30),
nome varchar(30),
valor DECIMAL(30),
PRIMARY KEY (id)
);
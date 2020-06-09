1 ) Crie o banco loja e tabela cliente , com os campos
Cpf, nome , telefone, email.

Inserir 3 registros.

2. Desenvolva um sistema php de busca de dados que permite efetuar uma busca pelo CPF.

---

Comando SQL

```sql
CREATE DATABASE store;

CREATE TABLE client(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    cpf VARCHAR(11) UNIQUE NOT NULL,
    phone VARCHAR(30) UNIQUE NOT NULL,
    mail VARCHAR(50) UNIQUE NOT NULL
);
```

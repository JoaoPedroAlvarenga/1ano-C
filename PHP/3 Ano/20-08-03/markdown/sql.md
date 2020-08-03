## SQL 

```sql
CREATE TABLE aluno(
  registration INT PRIMARY KEY AUTO_INCREMENT,
  name      VARCHAR(100) NOT NULL,
  birth     VARCHAR(100) NOT NULL,
  rg        VARCHAR(100) NOT NULL,
  cpf       VARCHAR(100) NOT NULL,
  phone     VARCHAR(100) NOT NULL,
  course    VARCHAR(100) NOT NULL,
  year      VARCHAR(100) NOT NULL,
  expedient VARCHAR(100) NOT NULL
);
```
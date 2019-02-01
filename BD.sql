CREATE DATABASE mensajeria;

USE mensajeria;

CREATE TABLE usuarios (
  id INT(3) auto_increment,
  nombre VARCHAR(30) NOT NULL ,
  apellido1 VARCHAR(30) NOT NULL ,
  apellido2 VARCHAR(30),
  login VARCHAR(16) NOT NULL ,
  password VARCHAR(30) NOT NULL,
  conf_password VARCHAR(30) NOT NULL,
  CONSTRAINT id_pk PRIMARY KEY (id),
  CONSTRAINT login_uk UNIQUE (login)
);
SELECT * FROM usuarios;

CREATE USER 'usuarios'@'localhost' IDENTIFIED BY '1234';
GRANT ALL ON mensajeria.* TO 'usuarios'@'localhost';
GRANT ALL PRIVILEGES ON mensajeria.* TO 'usuarios'@'localhost';
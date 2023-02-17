CREATE DATABASE scrum CHARACTER SET utf8 COLLATE utf8_general_ci;

use scrum;

CREATE TABLE usuarios (
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	usuario VARCHAR(40) NOT NULL,
	email VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
	rol VARCHAR(30) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
)ENGINE=INNODB;

INSERT INTO usuarios (nombre, usuario, email, password, rol) VALUES 
	('Nilton', 'user1', 'nip2712@gmail.com', '123', 'usuario'),
	('Mario', 'user2', 'mar@g.com', '123', 'usuario');
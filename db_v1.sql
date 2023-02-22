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

CREATE TABLE projects (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	description VARCHAR(200) NOT NULL,
	budget VARCHAR(20) NOT NULL,
	languages VARCHAR(100) NOT NULL,
	hours INT NOT NULL,
	backlog INT NOT NULL,
	tasks INT NOT NULL,
	start_date DATETIME DEFAULT CURRENT_TIMESTAMP,
	end_date DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(id)
)ENGINE=INNODB;


CREATE TABLE sprints (
id INT NOT NULL AUTO_INCREMENT,
project_id INT NOT NULL,
sprint INT NOT NULL,
hours DECIMAL(5,2) NOT NULL,
stories INT NOT NULL,
PRIMARY KEY (id),
CONSTRAINT fk_project_id
FOREIGN KEY (project_id)
REFERENCES projects (id)
)ENGINE=INNODB;

CREATE TABLE stories (
id INT NOT NULL AUTO_INCREMENT,
project_id INT NOT NULL,
sprint_num INT NOT NULL,
title VARCHAR(50) NOT NULL,
details VARCHAR(150) NOT NULL,
hours DECIMAL(4,2) NOT NULL,
STATUS VARCHAR(20) NOT NULL,
PRIMARY KEY (id),
CONSTRAINT fk_project_story
FOREIGN KEY (project_id)
REFERENCES projects (id),
CONSTRAINT fk_sprint_num
FOREIGN KEY (sprint_num)
REFERENCES sprints (sprint)
)ENGINE=INNODB;

CREATE TABLE tasks (
id INT NOT NULL AUTO_INCREMENT,
project_id INT NOT NULL,
sprint_id INT NOT NULL,
story_id INT NOT NULL,
estimate DECIMAL(4,2) NOT NULL,
importance VARCHAR(20) NOT NULL,
details VARCHAR(200) NOT NULL,
STATUS VARCHAR(20) NOT NULL,
PRIMARY KEY (id),
CONSTRAINT fk_project_task
FOREIGN KEY (project_id)
REFERENCES projects (id),
CONSTRAINT fk_sprint_task
FOREIGN KEY (sprint_id)
REFERENCES sprints (id),
CONSTRAINT fk_story_id
FOREIGN KEY (story_id)
REFERENCES stories (id)
)ENGINE=INNODB;
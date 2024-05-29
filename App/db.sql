CREATE DATABASE todo_13;

USE todo_13;

CREATE TABLE users (
	id int not null auto_increment primary key,
	username varchar(255) not null,
	password varchar(255) not null
);

CREATE TABLE todos (
	id int not null auto_increment primary key,
	name varchar(255) not null,
	description TEXT not null,
	due date not null,
	completed boolean not null DEFAULT false,
	user_id int not null,
	FOREIGN KEY (user_id) REFERENCES users(id)
);
CREATE TABLE assigned (
	id int not null auto_increment primary key,
	user_id int not null ON DELETE CASCADE,
	FOREIGN KEY (user_id) REFERENCES users(id)
	todo_id int not null ON DELETE CASCADE,
	FOREIGN KEY (todo_id) REFERENCES todos(id)

);


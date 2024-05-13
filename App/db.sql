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
	user_id int not null,
	FOREIGN KEY (user_id) REFERENCES users(id)
);

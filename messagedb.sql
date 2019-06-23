DROP TABLE IF EXISTS Messages;

CREATE TABLE Messages 
(
	custid PRIMARY KEY,
	firstName varchar(64),
	lastName varchar(64),
	email varchar(255),
	issue varchar(64),
	subject varchar(64),
	message varchar(511)
);
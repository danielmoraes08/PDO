create database crudpdo;
use crudpdo;

create table pessoa(
	id int primary key auto_increment,
    nome varchar(50),
    telefone varchar(20),
    email varchar(50)
);

select * from pessoa;


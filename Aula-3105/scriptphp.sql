create database web;
use web;

create table usuario(
id int auto_increment,
login varchar (30),
senha varchar (50),
nome varchar (200),
primary key (id));

ALTER TABLE usuario 
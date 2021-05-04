create database covid;

use covid;


create table type(
	IDType int auto_increment,
	nom varchar(50),
	primary key (IDType)

);

create table info (
	IDInfo int auto_increment,
	IDtype int,
	nombre int,
	dateInfo datetime,
	primary key (IDInfo),
	foreign key (IDtype) references type(IDType)
);



insert into type (nom) values ('Nouveaux cas');
insert into type (nom) values ('Gueris');
insert into type (nom) values ('Deces');
insert into type (nom) values ('En traitement');
insert into type (nom) values ('Formes graves');
insert into type (nom) values ('Test');

select nom, nombre, dateInfo from type,info where type.IDType=info.IDtype;

select nom, nombre, dateInfo from type,info where type.IDType=info.IDtype and Date(info.dateInfo)='2021-04-29';
create database svera_pruebas;
	use svera_pruebas;
	create table usuarios (
	 id char(35) not null,
     nombre varchar(35) not null,
     apellido varchar(35) not null,
     Identificacion bigint(20) not null,
     Direccion varchar(35) not null,
     contrasena varchar(45) not null,
     con_contrasena varchar(45)not null,
     primary key(id)

		);
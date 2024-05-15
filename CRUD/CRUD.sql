create database CRUD_ALUMNOS;
use CRUD_ALUMNOS;

create table usuarios(
	Nombre			varchar(20) primary key,
    login 			varchar(20),
    password		varchar(50),
    Correo			varchar(50)
);

create table Alumnos(
	Matricula int primary key null,
    Apellidos varchar(20),
    Nombre varchar(20),
    Nacimiento varchar(10),
    Direccion varchar(60),
    telefono varchar(20),
    correo varchar(30),
    Padre_Tutor varchar(40)
);
drop table alumnos;
insert into usuarios() values('Jose', 'Insano777', SHA1('JIJIJA'), 'nose@gmail.com' );
insert into usuarios() values('Diego', 'TasaLoca', SHA1('asdfghjklñ'), 'locasmetas@gmail.com' );

insert into Alumnos() values( 12344, 'Vega Nava', 'Dylan','20/04/2007','Rosaura pedrasa #15 Col. Joyita Uriangato Mor','4451442797','XD','maria');
insert into Alumnos() values( 12344, 'Vega Nava', 'Dylan','20/04/2007','Rosaura pedrasa #15 Col. Joyita Uriangato Mor','4451442797','XD','maria');

select * from Alumnos;
select * from usuarios;

select * from usuarios where login = 'Insano777' and password = SHA1('JIJIJA');

UPDATE alumnos SET Apellidos = 'Nuevo Nombre', Nombre = 'Nuevo Nombre',
				   Nacimiento = 'Nuevo Nombre',Direccion = 'Nuevo Nombre',
                   telefono = 'Nuevo Nombre', correo = 'Nuevo Nombre', Padre_Tutor = 'Nuevo Nombre'
                   WHERE Matricula = 1234;

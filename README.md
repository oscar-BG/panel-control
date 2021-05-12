# Empezamos el proyecto de panel de control creamos la base de datos panel-control

# Tabla usuario

CREATE TABLE usuarios (
	nombrep  varchar(30) NOT NULL,
	paterno varchar(30) NOT NULL,
	materno varchar(30) NOT NULL,
    id int(10) AUTO_INCREMENT,
	Nombre varchar(30) NOT NULL,
	clave varchar(30)  NOT NULL,
	Email varchar(30)  NOT NULL,
	PRIMARY KEY (id));

# Usuario agregado en la cual trabajaremos
INSERT INTO usuarios (Nombre, clave, Email) VALUES('root','tor','ejemplo@dragon.com')

# Agregamos una nueva tabla a la base de datos panel-control
CREATE TABLE empresa(
    name varchar(10) NOT NULL,
    ubicacion varchar(100) NOT NULL
)
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
	)
# Usuario agregado en la cual trabajaremos
INSERT INTO usuarios (Nombre, clave, Email) VALUES('root','tor','ejemplo@dragon.com')
# Actualizar datos del usuario
UPDATE usuarios SET nombrep='', Nombre='', paterno='',materno='',id='',Email='' WHERE 1 nombre = ''

# Agregamos una nueva tabla a la base de datos panel-control
CREATE TABLE empresa(
	id int(10) AUTO_INCREMENT,
    nombre varchar(30) NOT NULL,
    ruta varchar(30) NOT NULL,
	PRIMARY KEY (id);
)

# Insertamos un campo
INSERT INTO empresa(nombre, ruta) VALUES ('dragones','imagen.png')

# para actualizar el campo
UPDATE empresa SET nombre=:nombre WHERE id =1
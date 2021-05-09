# Empezamos el proyecto de panel de control

# Tabla usuario

CREATE TABLE usuarios ( 
    id int(10) AUTO_INCREMENT,
	Nombre varchar(30) NOT NULL,
	clave varchar(30)  NOT NULL,
	Email varchar(30)  NOT NULL,
	PRIMARY KEY (id));

# Usuario agregado en la cual trabajaremos
INSERT INTO usuarios (Nombre, clave, Email) VALUES('root','tor','ejemplo@dragon.com')
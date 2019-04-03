--DDL
----------
--1. Crea una nueva tabla llamada EQUIPOS2, con la misma estructura que la tabla equipos (incluyendo restricciones).

CREATE TABLE EQUIPOS2(
	CODIGO			VARCHAR2(4)		CONSTRAINT PK_EQUIPOS2 PRIMARY KEY,
	NOMBRE			VARCHAR2(50),
	ESTADIO			VARCHAR2(50),
	AFORO			NUMBER,
	ANNODEFUNDACION	DATE,
	CIUDAD			VARCHAR2(30)
);

--2. Cambia la restricción de clave foránea llamada FK_JUGADORES_EQUIPOS para que en el borrado no elimine en cascada
--sino que deje los valores a NULL (SET NULL).

ALTER TABLE JUGADORES DROP CONSTRAINT FK_JUGADORES_EQUIPOS ;
ALTER TABLE JUGADORES ADD CONSTRAINT FK_JUGADORES_EQUIPOS FOREIGN KEY (CODIGOEQUIPO) REFERENCES EQUIPOS(CODIGO) ON DELETE SET NULL;

--DML
----------
--1. Inserta un registro REAL en cada tabla, respetando las restricciones.
INSERT INTO EQUIPOS (CODIGO, NOMBRE, ESTADIO, AFORO, ANNODEFUNDACION, CIUDAD) VALUES (5, 'Paris Saint-Germain', 'Parc des Princes', 49000, TO_DATE('1897', 'YYYY'), 'Paris');
INSERT INTO EQUIPOS2 (CODIGO, NOMBRE, ESTADIO, AFORO, ANNODEFUNDACION, CIUDAD) VALUES (6, 'Juventus de Turín', 'Allianz Stadium', 41000, TO_DATE('2011', 'YYYY'), 'Turín, Italia');
INSERT INTO JUGADORES (CODIGO, NOMBRE, FECHANACIMIENTO, POSICION, CODIGOEQUIPO) VALUES (11, 'Neymar', TO_DATE('05-02-1992', 'DD-MM-YYYY'), 'Delantero', 5);
INSERT INTO PARTIDOS (CODIGO, FECHA, CODIGOEQUIPOVISITANTE, CODIGOEQUIPOLOCAL) VALUES (4, TO_DATE('03-03-2005', 'DD-MM-YYYY'), 2, 5);
INSERT INTO GOLES (CODIGOPARTIDO, CODIGOJUGADOR, MINUTO, DESCRIPCION) VALUES (4, 11, 60, 'De falta');

--2. Ejecuta un commit explícito para forzar los cambios hechos hasta ahora.

COMMIT;

--3. Prueba cómo se comporta en el borrado la restricción FK_JUGADORES_EQUIPOS.

DELETE FROM EQUIPOS WHERE CODIGO= '1';

--4. Ejecuta un commit explícito para forzar los cambios hechos hasta ahora.

--Consultas DML de datos anexados
-------------------------------
--1. Inserta en la tabla equipos2 aquellos equipos que han jugado algún partido.
--2. En la tabla jugadores, cambia la fecha de nacimiento del más joven. Ahora será 3 meses mayor que el jugador más viejo hasta el momento.
--3. Inserta un nuevo jugador que pertenecerá a un equipo ya existente, pero que tendrá como fecha de nacimiento diez años menos que el presidente del mismo (ésto lo debe realizar mediante una consulta).

RA5

Criterios de evaluación:

a) Se han identificado las herramientas y sentencias para
modificar el contenido de la base de datos.
b) Se han insertado, borrado y actualizado datos en las
tablas.
c) Se ha incluido en una tabla la información resultante de
la ejecución de una consulta.
d) Se han adoptado medidas para mantener la integridad
y consistencia de la información.
f) Se ha reconocido el funcionamiento de las transacciones.
g) Se han anulado parcial o totalmente los cambios producidos por una transacción.
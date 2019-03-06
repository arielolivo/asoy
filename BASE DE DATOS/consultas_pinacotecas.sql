--1)Consultar el contenido de todas las tablas.

SELECT * FROM [NOMBRE DE LA TABLA]

--2)Consultar sólo el identificador y el nombre las siguientes tablas:
--Pinacotecas.

select ID_PINACOTECA, NOMBRE from PINACOTECAS;

--Cuadros.

select ID_CUADRO , N_CUADRO from cuadros;

--Pintores.

select ID_PINTOR , N_PINTOR from pintores;

--Mecenas.

select ID_MECENAS , N_MECENAS from MECENAS;

--Escuelas.

select ID_ESCUELA , N_ESCUELA from Escuelas;

--Usando concatenación de textos, se pide listar los datos de la tabla pintores con las siguientes columnas: "IDENTIFICADOR", "NOMBRE", "ID-NOMBRE", donde ID-NOMBRE será el resultado de la concatenación del campo ID_PINTOR y de N_PINTOR.

SELECT ID_PINTOR, N_PINTOR , CONCAT(CONCAT(ID_PINTOR, '-'), N_PINTOR)AS ID_NOMBRE  FROM PINTORES;

--Usando concatenación de textos, listar el contenido de la tabla pinacotecas de la siguiente forma: "Pinacoteca (ID_PINACOTECA): (NOMBRE)".

 SELECT 'PINACOTECA' || ID_PINACOTECA || ':' || NOMBRE AS INFORMACION FROM PINACOTECAS;

--Seleccionar nombre y país de la tabla pinacotecas donde ID_PINACOTECA es "MUBAS".

SELECT NOMBRE , PAIS from Pinacotecas
WHERE ID_PINACOTECA= 'MUBAS';

--Seleccionar técnica, ancho y alto de los siguientes cuadros: La Gioconda, El nacimiento de Venus y Sagrada Familia.

SELECT N_CUADRO , tecnica, ancho , alto FROM cuadros
WHERE N_CUADRO IN ('LA GIOCONDA', 'EL NACIMIENTO DE VENUS', 'SAGRADA FAMILIA');

--Seleccionar nombre y ciudad de nacimiento de los mecenas italianos.

SELECT N_MECENAS , CIUDAD_NAC FROM MECENAS
WHERE PAIS='ITALIA';

--Seleccionar el nombre de los mecenas que nacieron en Madrid o en Valladolid.

SELECT N_MECENAS FROM MECENAS
WHERE CIUDAD_NAC='MADRID' OR CIUDAD_NAC='VALLADOLID';

--Seleccionar nombre y fecha de aparición de las escuelas españolas o italianas.

SELECT N_ESCUELA , FECHA_APARICION FROM ESCUELAS
WHERE PAIS='ESPAÑA' OR PAIS='ITALIA';

--Idem anterior pero usando la cláusula IN.

SELECT N_ESCUELA , FECHA_APARICION FROM ESCUELAS
WHERE PAIS IN ('ESPAÑA', 'ITALIA');

--Seleccionar nombre y ciudad de nacimiento de los mecenas holandeses y belgas usando la cláusula IN.

SELECT N_MECENAS, CIUDAD_NAC FROM MECENAS
WHERE PAIS IN ('HOLANDA', 'BELGICA');

--Seleccionar nombre y ciudad de nacimiento de los mecenas cuyo nombre comienza por F y termina en O.

SELECT N_MECENAS , CIUDAD_NAC FROM MECENAS
WHERE N_MECENAS LIKE 'F%%O';
--1. Inserta en la tabla "Programas" el sistema operativo Windows 10 Professional.

insert into programas values(21, 'Windows', '10 Professional');

--2. Crea una tabla llamada "Microsoft" con la misma estructura que la tabla "Programas".
--Inserta en ella sólo aquellos programas del fabricante "Microsoft".

create table microsoft(
	codigo		number(2,0) constraint pk_microsoft primary key,
	nombre		varchar2(30),
	version		varchar2(20)
	);


--3. Inserta en la tabla "Registra" las filas correspondientes a los registros que haría el cliente con DNI "5" 
--para cada uno de los programas que podría comprar en "El Corte Inglés" de Sevilla. Los registros los haría por Internet.

INSERT INTO registra(CIF,DNI,CODIGO,MEDIO)
    select c.cif, 5 , p.codigo, 'Internet'
    from comercio c
        inner join distribuye d on c.cif=d.cif
            inner join programas  p on p.codigo = d.codigo
             where c.ciudad='Sevilla' and c.nombre='El Corte Inglés';

--4. Añade a la tabla "Programas" una columna llamada "registros" de tipo number.
--A continuación, para cada programa, escribe en esta columna el número de registros que se han realizado del mismo,
--independientemente del medio utilizado para ello (Internet, teléfono o Tarjeta postal).

ALTER TABLE programas ADD registros number(10);
INSERT INTO programas(registros)
select count (r.codigo)
from registra r
inner join programas  p on p.codigo = r.codigo
group by r.codigo

--5. Añade ahora a la tabla "Programas" tres columnas más: "resgistros_i", "registros_t" y "registros_p". 
--Actualiza cada una con el número de registros que se han realizado por cada medio (Internet, Teléfono y Tarjeta postal).



--6. Añade a la tabla "Clientes" una columna llamada "registrados" de tipo number que 
--deberás actualizar con el número de registros que ha efectuado el cliente,
--independientemente del medio por el que lo haya hecho.

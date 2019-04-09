--1. Inserta en la tabla "Programas" el sistema operativo Windows 10 Professional.
--ver imagen 1

insert into programas values(21, 'Windows', '10 Professional');

--2. Crea una tabla llamada "Microsoft" con la misma estructura que la tabla "Programas".
--Inserta en ella sólo aquellos programas del fabricante "Microsoft".
--comprobacion ver imagen 2
create table microsoft(
	codigo		number(2,0) constraint pk_microsoft primary key,
	nombre		varchar2(30),
	version		varchar2(20)
	);

INSERT INTO microsoft(codigo,nombre,version)
    select p.codigo,p.nombre, p.version
    from programas p 
        inner join desarrolla d on p.codigo=d.codigo
        inner join fabricante f on f.id_fab=d.id_fab
    where f.nombre='Microsoft'


--3. Inserta en la tabla "Registra" las filas correspondientes a los registros que haría el cliente con DNI "5" 
--para cada uno de los programas que podría comprar en "El Corte Inglés" de Sevilla. Los registros los haría por Internet.
--comprobar ver imagen 3

INSERT INTO registra(CIF,DNI,CODIGO,MEDIO)
    select c.cif, 5 , p.codigo, 'Internet'
    from comercio c
        inner join distribuye d on c.cif=d.cif
            inner join programas  p on p.codigo = d.codigo
             where c.ciudad='Sevilla' and c.nombre='El Corte Inglés';

--4. Añade a la tabla "Programas" una columna llamada "registros" de tipo number.
--A continuación, para cada programa, escribe en esta columna el número de registros que se han realizado del mismo,
--independientemente del medio utilizado para ello (Internet, teléfono o Tarjeta postal).
--comprobar ver imagen 4

ALTER TABLE programas ADD registros number(10);
update programas p
set registros=(
                select count (r.codigo)
                from registra r
                where r.codigo=p.codigo);

--5. Añade ahora a la tabla "Programas" tres columnas más: "resgistros_i", "registros_t" y "registros_p". 
--Actualiza cada una con el número de registros que se han realizado por cada medio (Internet, Teléfono y Tarjeta postal).
--comprobar ver imagen 5

ALTER TABLE programas ADD (registros_i number(10),
                          registros_t number(10),
                          registros_p number(10));

--registro i 
update programas p
set registros_i=(
select count(medio)
from registra r
where medio='Internet' and r.codigo=p.codigo);

--registros t
update programas p
set registros_t=(
select count(medio)
from registra r
where medio='Teléfono' and r.codigo=p.codigo);

--registros p
update programas p
set registros_p=(
select count(medio)
from registra r
where medio='Tarjeta postal' and r.codigo=p.codigo);

--todo en uno
update programas p 
set registros_i=(select count(medio)from registra r where medio='Internet' and r.codigo=p.codigo),
    registros_t=(select count(medio)from registra r where medio='Teléfono' and r.codigo=p.codigo),
    registros_p=(select count(medio)from registra r where medio='Tarjeta postal' and r.codigo=p.codigo);

--6. Añade a la tabla "Clientes" una columna llamada "registrados" de tipo number que 
--deberás actualizar con el número de registros que ha efectuado el cliente,
--independientemente del medio por el que lo haya hecho.
--comprobar ver imagen 6

ALTER TABLE clientes ADD registrados number(10);
update clientes c
set registrados=(
                select count (r.dni)
                from registra r
                where r.dni=c.dni);

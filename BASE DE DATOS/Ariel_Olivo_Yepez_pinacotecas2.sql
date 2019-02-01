--**ALTER TABLE**--

--Borrar la tabla PINTORES.-- 
DROP TABLE PINTORES CASCADE CONSTRAINT;
COMMIT;
--Mostrar las restricciones del usuario "select constraint_name, constraint_type, table_name from user_constraints;" y comprobar si hay algo extraño.
select constraint_name, constraint_type, table_name from user_constraints;
--Buscar información en la red sobre purge. Para ello emplear las palabras clave purge oracle:
--Escribir el comando"purge recyclebin".
purge recyclebin;
COMMIT;
--Por último volver a mostrar las restricciones del usuario y comparar el listado con el anterior.
select constraint_name, constraint_type, table_name from user_constraints;
--Cambiar el nombre de la tabla CUADROS por OBRAS. Comprobar que el cambio se ha efectuado.
alter table CUADROS rename to OBRAS;
COMMIT;
select table_name from user_tables order by table_name;--PARA VER LAS TABLAS
--Volver a crear la tabla PINTORES y las restricciones que fueron afectadas.
CREATE TABLE PINTORES
(
    ID_PINTOR   NUMBER(9),
    N_PINTOR     VARCHAR2(30),
    CIUDAD       VARCHAR2(20),
    PAIS         VARCHAR2(20),
    FECHA_N      DATE,
    FECHA_F      DATE,
CONSTRAINT PK_PINTORES PRIMARY KEY(ID_PINTOR)
);
COMMIT;
--Añadir a la tabla ESCUELAS un nuevo atributo (columna), llamado NUEVA_COL y de tipo VARCHAR2(15).
--Cambiar la longitud del tipo de dato de la columna añadida a VARCHAR2(25).
--En la tabla ESCUELAS cambiar el nombre de la columna N_ESCUELA por NOMBRE_ESCUELA.
select column_name from all_tab_columns where table_name = 'ESCUELAS'; --PARA VER LAS COLUMNAS DE UNA TABLA
ALTER TABLE ESCUELAS RENAME COLUMN N_ESCUELA to NOMBRE_ESCUELA;
select column_name from all_tab_columns where table_name = 'ESCUELAS';-- VUELVO A COMPROBAR
--Volver a cambiar el nombre de la columna modificada anteriormente a N_ESCUELA.
ALTER TABLE ESCUELAS RENAME COLUMN NOMBRE_ESCUELA to N_ESCUELA;
select column_name from all_tab_columns where table_name = 'ESCUELAS';

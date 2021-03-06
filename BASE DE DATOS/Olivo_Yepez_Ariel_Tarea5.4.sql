--1.-tilizando los datos del tablespace HR:
--a) Hacer un procedimiento que muestre el nombre y el salario del empleado cuyo código es 117.

create or replace PROCEDURE SALARIO 
is
  v_nombre employees.last_name%TYPE;
  v_salario employees.salary%TYPE;
begin
  select last_name, salary into v_nombre, v_salario
  from employees
  where employee_id='117';
  dbms_output.put_line('Nombre: '||v_nombre||
' 
Salario: '||v_salario);
END SALARIO;
--para ejecutarlo seria:
SET SERVEROUTPUT ON
BEGIN
  SALARIO(); 
END;

--b) Hacer un procedimiento que, reciba por teclado un código de empleado y devuelva su nombre.

create or replace PROCEDURE CODIGO (t_codigoemp employees.employee_id%type)
is
  v_nombre employees.last_name%TYPE;
begin
  select last_name into v_nombre
  from employees
  where employee_id=t_codigoemp;
  dbms_output.put_line('Nombre: '||v_nombre);
END CODIGO;

--para ejecutarlo seria:
DECLARE
  T_CODIGOEMP NUMBER;
BEGIN
  T_CODIGOEMP := 100; --borrar null y escribir el codigo del empleado

  CODIGO(
    T_CODIGOEMP => T_CODIGOEMP
  );
END;

--c) Crear un procedimiento que cuente el número de filas que hay en la tabla EMPLOYEES, deposite el resultado en una variable y visualiza su contenido.

CREATE OR REPLACE PROCEDURE NUMFILA 
is
  v_numfilas number;
begin
  select count(*) into v_numfilas
  from employees;
  dbms_output.put_line('Numero Filas de la tabla EMPlEADOS: '||v_numfilas);
END NUMFILA;

--para ejecutarlo seria:

SET SERVEROUTPUT ON
BEGIN
  NUMFILA();
END;

--d) Codificar un procedimiento que permita borrar un empleado cuyo número se introducirá por teclado.

CREATE OR REPLACE PROCEDURE BORRAR (t_codigoemp employees.employee_id%TYPE)
is
begin
  delete employees
  where employee_id=t_codigoemp;
END BORRAR;

--para ejecutar seria:
DECLARE
  T_CODIGOEMP NUMBER;
BEGIN
  T_CODIGOEMP := NULL ;--aqui insertaria el codigo del empleado

  BORRAR(
    T_CODIGOEMP => T_CODIGOEMP
  );
END;

--e) Escribir un procedimiento que modifique la localidad de un departamento. El procedimiento recibirá como parámetros el número del departamento y la localidad nueva.



--f) Crear un procedimiento que en la tabla EMPLOYEES incremente el salario el 10% a los empleados que tengan una comisión superior al 5% del salario.

CREATE OR REPLACE PROCEDURE INCREMENTO
is
begin
	update employees
	set salary = salary*1.1
	where 0.05*salary<nvl(COMMISSION_PCT,0);
	dbms_output.put_line(SQL%ROWCOUNT||' filas actualizadas');
END INCREMENTO;

--para ejecutar seria:

BEGIN
  INCREMENTO();
END;



--g) Crear un procedimiento que inserte un empleado en la tabla EMPLOYEES. Su número será superior a los existentes y la fecha de incorporación a la empresa será la actual.

CREATE OR REPLACE PROCEDURE INSERTAR
is
	v_empleado employees.employee_id%type;
begin
	select max(employee_id) into v_empleado
	from employees;
	insert into employees (employee_id, first_name, last_name, hire_date, EMAIL,job_id)
	values (v_empleado+1, 'Ariel', 'Olivo', SYSDATE, 'ASOY','IT_PROG');
END INSERTAR;

--para ejecutarlo:

BEGIN
  INSERTAR();
END;

--2.-Codificar un procedimiento que reciba una cadena y la visualice al revés.

CREATE OR REPLACE PROCEDURE REVES(p_cadena VARCHAR2)
is
	vcad_alreves VARCHAR2(80);
BEGIN
	FOR i IN REVERSE 1..LENGTH(p_cadena) LOOP
		vcad_alreves := vcad_alreves || SUBSTR(p_cadena,i,1);
	END LOOP;
	DBMS_OUTPUT.PUT_LINE(vcad_alreves);
END REVES;

--para ejecutarlo :

DECLARE
  P_CADENA VARCHAR2(200);
BEGIN
  P_CADENA := 'gracias'; --aqui se pondria cualquier palabra

  REVES(
    P_CADENA => P_CADENA
  );
 
END;

--3.-Escribir un procedimiento que reciba una fecha y escriba el año, en número, correspondiente a esa fecha.

--4.-Realizar un procedimiento que reciba un número y muestre su tabla de multiplicar.

--5.-Realizar función factorial.

CREATE OR REPLACE FUNCTION FACTORIAL 
(
  N IN NUMBER 
) RETURN NUMBER AS
resultado number :=1;
BEGIN
for i in 1..n loop
 resultado := resultado*i;
end loop;
  RETURN resultado;
END FACTORIAL;

--para ejecutarlo

DECLARE
  N NUMBER;
  v_Return NUMBER;
BEGIN
  N := 3; -- aqui se pondria cualquier numero
  v_Return := FACTORIAL(
    N => N
  );
  DBMS_OUTPUT.PUT_LINE(v_return);

END;

--6.-Realizar función salarios pizarra.

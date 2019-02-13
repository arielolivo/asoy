--1.- Listar el salario medio de los empleados.

SELECT AVG(salary) FROM employees;

--2.- Listar el id y apellidos de aquellos empleados que tengan un salario anual superior a 40000 (recordar que el salario de la BD es mensual).

SELECT employee_id, last_name FROM employees
WHERE salary*12>40000;

--3.- Listar id y salario, incrementado en un 10%, de los empleados que ganen menos de 100000 euros al año.

SELECT employee_id, salary*12+(salary*12)*0.1 as salario_incrementado_10pct FROM employees
WHERE salary*12<100000;

--4.- Muestra el número de empleados que ganan más de 1400

SELECT employee_id FROM employees
WHERE salary>1400;

--5.- Muestra los apellidos y oficio de los empleados, ordenados por salario.

SELECT last_name, job_title  from EMPLOYEES, JOBS
ORDER BY salary;

--6.-Muestra el gasto de personal total de la empresa, sumando salarios y comisiones.

select sum(salary+salary*nvl(commission_pct,0))
from employees;

--7.-Muestra los apellidos de los empleados y su salario (ordenado por el salario) con el siguiente formato:

        --apellido1........ salario1

        --apellidon.........salarion

select rpad(last_name,15,'......'), salary
from EMPLOYEES
order by salary ASC;

--8.-Muestra el número de trienios completos de cada empleado.

Select last_name , trunc(months_between(sysdate, hire_date)/36) as trienios
from EMPLOYEES;


--9.- Muestra el total de dinero ganado por el empleado desde que se incorporó a la empresa suponiendo que el salario no ha cambiado en todo ese tiempo.


--10.- Muestra con dos decimales el salario diario de cada trabajador suponiendo que los meses tienen 30 días.


--11.- Muestra los empleados que tengan en su apellido al menos dos letras 'a'.

--12.- Muestra los datos de los empleados cuyo apellido tenga mas de cinco letras.


--13.- Muestra un mensaje de saludo a cada empleado con el formato 'Hola apellido_empleado'.


--14.- Muestra el apellido de cada empleado junto con el nombre del mes en el que entró en la empresa.


--15.- Muestra el apellido del primer empleado por orden alfabético.


--16.-. Muestra el número de directores que hay en la empresa.


--17.- Muestra los empleados que llevan más de 6 años en la empresa.


--18.- Muestra los empleados que fueron dados de alta entre el 01/03/1988 y el 30/06/1989.
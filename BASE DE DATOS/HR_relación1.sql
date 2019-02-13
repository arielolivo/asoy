--1. Mostrar el apellido, fecha de alta y número de departamento de cada empleado.
SELECT last_name, hire_date, department_id FROM EMPLOYEES;
--2. Mostrar el número, nombre y localización de cada departamento.
SELECT department_id, department_name, location_id FROM DEPARTMENTS;
--3. Mostrar todos los datos de todos los empleados.
SELECT * FROM EMPLOYEES;
--4. Datos de los empleados ordenados por apellido.
SELECT * FROM EMPLOYEES ORDER BY last_name ASC;
--5. Datos de los empleados ordenados descendentemente por número de departamento.
SELECT * FROM EMPLOYEES ORDER BY department_id DESC;
--6. Datos de los empleados ordenados descendentemente por número de departamento
--y dentro de cada departamento ordenados ascendentemente por apellido.

--7. Mostrar los datos de los empleados cuyo salario esté comprendido entre 10000 y 30000,
--ordenados por salario.
SELECT * FROM EMPLOYEES 
WHERE salary BETWEEN 10000 AND 30000
ORDER BY salary ASC;
--8. Mostrar los datos de los empleados cuyo salario sea mayor que 20000.
SELECT * FROM EMPLOYEES 
WHERE salary > 20000;
--9. Mostrar los datos de los empleados cuyo oficio sea programador.
SELECT * FROM EMPLOYEES, JOBS
WHERE JOBS.job_title ='Programmer';
--10. Seleccionar el apellido y oficio de los empleados del departamento número 20.
 SELECT last_name, job_title  from EMPLOYEES, JOBS
 WHERE department_id=20; 
--11. Mostrar los apellidos de los empleados en orden ascendente.
SELECT last_name FROM EMPLOYEES
ORDER BY last_name ASC;
--12. Seleccionar los empleados cuyo oficio sea marketing manager. Mostrar los datos
--ordenados por apellido.
SELECT * FROM EMPLOYEES, JOBS
WHERE JOBS.job_title='Marketing Manager'
ORDER BY last_name ASC;
--13. Mostrar los empleados cuyo departamento sea 10 y cuyo oficio sea accountant.
--Ordenar el resultado por apellido;
SELECT *  from EMPLOYEES, JOBS
 WHERE department_id=10 AND JOBS.job_title='Accountant'
 ORDER BY last_name ASC; 
--14. Mostrar los empleados que tengan un salario mayor que 200000 o que
--pertenezcan al departamento número 20.
SELECT *  from EMPLOYEES
WHERE salary=200000 or department_id=20;
--15. Ordenar los empleados por oficio, y dentro de oficio por apellido.
SELECT *  from EMPLOYEES, JOBS
ORDER BY job_title, last_name;
--16. Seleccionar los empleados cuyo apellido empiece por ‘S’.
SELECT * FROM EMPLOYEES
where last_name LIKE 'S%';
--17. Seleccionar los empleados cuyo apellido termine en 'n’.
SELECT * FROM EMPLOYEES
where last_name LIKE '%n';
--18. Seleccionar de la tabla empleados aquellas filas cuyo apellido empiece por ‘A’ y el
--email tenga una ‘E’ en cualquier posición.
SELECT * FROM EMPLOYEES
where last_name LIKE 'A%' AND email LIKE '%E%';
--19. Seleccionar los empleados cuyo salario esté entre 10000 y 17000. Utilizar el operador
--BETWEEN.
SELECT * FROM EMPLOYEES
WHERE salary BETWEEN 10000 AND 17000;
--20. Obtener los empleados que tengan una comisión superior a 600.
SELECT * FROM EMPLOYEES
WHERE commission_pct >600;
--21. Seleccionar los datos de los empleados ordenados por número de departamento, y
--dentro de cada departamento ordenados por apellido.
SELECT * FROM EMPLOYEES
ORDER BY department_id, last_name;
--22. Número y apellidos de los empleados cuyo email termine en ‘h’ y tengan un salario
--superior a 2000.
SELECT employee_id, last_name FROM EMPLOYEES
WHERE email like '%h'and salary >2000;
--23. Datos de los departamentos cuya localización empiece por ‘B’.
SELECT * FROM DEPARTMENTS
WHERE location_id like 'B%';
--24. Datos de los empleados que tengan un salario superior a 200 y pertenezcan al
--departamento número 10.
SELECT * FROM EMPLOYEES
where salary > 200 and department_id=10;
--25. Mostrar los apellidos de los empleados que no tengan comisión.
SELECT last_name FROM EMPLOYEES
where commission_pct is NULL ;
--26. Mostrar los apellidos de los empleados que no tengan comisión y cuyo apellido
--empiece por ‘J’.
SELECT last_name FROM EMPLOYEES
where commission_pct is NULL and last_name like 'J%';
--27. Seleccionar el apellido, salario y número de departamento de los empleados cuyo salario
--sea mayor que 200000.
SELECT last_name, salary, department_id FROM EMPLOYEES
where salary>200000;
--28. Obtener los apellidos de todos los empleados en minúscula.
SELECT lower (last_name) FROM EMPLOYEES;
--29. En una consulta concatena el apellido de cada empleado con su oficio.
Select concat(last_name,job_title) from EMPLOYEES, JOBS;
--30. Mostrar el apellido y la longitud del apellido (función LENGTH) de todos los
--empleados, ordenados por la longitud de los apellidos de los empleados
--descendentemente.
Select last_name,length(last_name) from EMPLOYEES order by length(last_name) desc;
--31. Obtener el año de contratación de todos los empleados (función TO_CHAR).
Select TO_CHAR (hire_date) from EMPLOYEES;
--32. Mostrar los datos de los empleados que hayan sido contratados en el año 2004.
SELECT * FROM EMPLOYEES
WHERE hire_date like '%04';
--33. Mostrar los datos de los empleados que hayan sido contratados en el mes de
--febrero de cualquier año.
SELECT * FROM EMPLOYEES
WHERE hire_date like '___02%'
--34. Mostrar los datos de los empleados cuyo apellido empiece por 'S' y hayan sido
--contratados en el año 2006.
SELECT * FROM EMPLOYEES
WHERE last_name='S%' AND hire_date like '%06';
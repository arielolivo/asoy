--1. Nombre de empleado y nombre de departamento de los empleados que superan la media de sueldo del departamento al que pertenecen.
select e.first_name, d.department_name
from employees e inner join 
departments d on e.department_id = d.department_id
WHERE salary>(select avg(salary)
                from employees
                where e.department_id = d.department_id)
--2. Nombre del empleado, y del departamento al que pertenece, que tiene la comisión más alta.

--3. Empleados, y departamentos al que pertenecen, con sueldos superiores a la media total de la empresa.



--4. Sueldo, nombre del empleado y nombre del departamento de los empleados con una antigüedad superior al empleado 107. (Cambiado)

select e.first_name, d.department_name , e.salary
from employees e inner join 
departments d on e.department_id = d.department_id
where hire_date < (select hire_date
                    from employees
                    where employee_id=107)


--5. Empleados que, en cada departamento, tienen el sueldo máximo.

--6. Empleados que trabajen en departamentos que están en Seattle o Southlake. (Cambiado para que hubiera datos).

--7. De aquellos empleados de la empresa que tengan un sueldo superior al sueldo máximo del departamento de ventas (department_id 80) queremos saber su sueldo, su nombre y el departamento al que pertenecen. 

--8. Empleados que trabajen en departamentos en los que nadie cobre comisiones.

--Añadidas:

--9. Empleados y nombre del departamento de empleados que trabajen en el departamento cuyo salario medio supere el salario medio total de la empresa.

--10. Para cada departamento que tenga 3 o más trabajadores, calcular el total de salarios, el total de comisiones y el número de trabajadores. Mostrar el nombre del departamento y las 3 cantidades.
--1.- Listar el nombre de los departamentos en los que en los que alguno de los salarios sea superior a 2000.

SELECT  department_name FROM departments
WHERE department_id in(select department_id from employees where salary>2000);

--2.- Listar el nombre de los departamentos que tengan algún empleado que gane más de 33000 al año. (Recuerda que el salario es mensual).

select department_name
from departments
where department_id in(select department_id 
                        from employees 
                        where (salary*12)>33000 );
                        
--3.- Listar todos los empleados que trabajen en el departamento con nombre Shipping .

SELECT first_name||' '||last_name
from  employees 
where department_id in (select department_id from departments where department_name='Shipping')

--4.-Mostrar todos los datos de los empleados que trabajen en un departamento cuyo nombre contenga una l.

select * 
from employees 
where department_id in (select department_id 
                        from departments 
                        where department_name like '%l%')

--5.- Muestra los empleados que ganan más que Alexander Hunold.

select first_name||' '||last_name 
from employees
where salary > (select salary
                from employees 
                where  first_name='Alexander' and last_name='Hunold')

--6.- Listar aquellos empleados que han entrado a trabajar en la empresa antes que Bruce Ernst.

select first_name||' '||last_name , hire_date
from employees
where hire_date < (select hire_date
                    from employees 
                    where  first_name='Bruce' and last_name='Ernst');

--7.- Muestra los empleados del mismo departamento que Alexander Hunold.

select first_name||' '||last_name 
from employees
where department_id= (select department_id
                        from employees 
                        where  first_name='Alexander' and last_name='Hunold')


--8.- Muestra los empleados que trabajan en un departamento ubicado en Seattle.

select first_name||' '||last_name
from employees
where department_id in (select department_id
                        from departments 
                        where location_id=(select location_id
                                            from locations
                                            where city='Seattle'));

--9.- Muestra nombre y salario de los empleados del departamento Executive.

select first_name||' '||last_name, salary
from employees
where department_id in (select department_id
                        from departments 
                        where department_name='Executive');

--10.- Muestra el nombre, el salario y la comisión de los empleados que trabajan en el mismo departamento que Bruce Ernst.

select first_name||' '||last_name , salary , nvl(commission_pct,0) as comisión_porcentaje
from employees
where department_id in (select department_id
                    from employees 
                    where  first_name='Bruce' and last_name='Ernst');

--11.- Muestra el nombre del departamento donde trabaja el empleado más antiguo la empresa.

select department_name
from departments
where department_id = (SELECT department_id
                        FROM employees
                        where hire_date = (select min(hire_date)
                                            from employees));

--12.- Muestra los nombres de los departamentos en los que trabaja alguien que gane menos que Bruce Ernst.

SELECT department_name
FROM departments
where department_id in (select department_id
                    from employees
                    where salary < (select salary
                                    from employees 
                                    where  first_name='Bruce' and last_name='Ernst'));

--13.-Muestra todos los datos de los Programmer del Departamento 60.

select * 
from employees 
where department_id=60 and department_id in (
                                            select department_id 
                                            from departments
                                            where job_id in (SELECT job_id
                                                            FROM jobs 
                                                            where job_title='Programmer') )


--14.- Obtener el sueldo medio de los empleados que trabajan en Seattle.

select round(avg(salary),2)as media_empleados_seattle  
from employees
where department_id in (select department_id
                        from departments 
                        where location_id=(select location_id
                                            from locations
                                            where city='Seattle'));

--15.- Muestra la cantidad de empleados que trabajan en el departamento Shipping.
SELECT count(employee_id)as cantidad_de_empleados
from  employees 
where department_id in (select department_id 
                        from departments 
                        where department_name='Shipping')
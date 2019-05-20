--1.  Desarrollar un procedimiento que visualice el nombre y apellido de todos los empleados  ordenados por número de departamento. 

CREATE OR REPLACE PROCEDURE CURSOR1
is
    cursor emp_cursor is
    select first_name , last_name from employees ORDER BY department_id;
    v_reg_cursor emp_cursor%rowtype;
    begin
     for v_reg_cursor in emp_cursor loop
         DBMS_OUTPUT.PUT_LINE('----------------------------------------------------------------');
        DBMS_OUTPUT.PUT_LINE('........nombre:'||v_reg_cursor.first_name||'...........Apellido: '||v_reg_cursor.last_name);
        DBMS_OUTPUT.PUT_LINE('----------------------------------------------------------------');
 END LOOP;
END CURSOR1;

--para llamarlo seria:

BEGIN
  CURSOR1(); 
END;

--2. Desarrollar un procedimiento que encuentre el primer empleado con un sueldo menor de 6.000 €.



--3. Realizar un procedimiento que visualice el número y nombre de un empleado, así como el nombre de su departamento,
-- ordenados por nombre de departamento.



--4. Escribir un procedimiento que reciba una cadena y visualice el nombre y el número de empleado de 
--todos los empleados cuyo nombre contenga la cadena especificada. Al finalizar visualizar el número de empleados mostrados.

--5. Crear un procedimiento que muestre las localizaciones (dirección y ciudad) y el número de departamentos que tiene 
--(incluso si no tiene departamentos).

--6. Escribir un programa que visualice el nombre, apellido y el salario de los cuatro empleados que tienen el salario más bajo.

--7.Codificar un programa que visualice los dos empleados que ganan más de cada oficio.
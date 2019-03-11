<?php 
$email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));

$conexion = mysqli_connect("localhost","root","","cursophp")
or die ("problemas con la conexion");

$registros= mysqli_query($conexion, 
"Select idAlumno, nombre, mail, codigoCurso from alumnos  where mail='$email'") 
or die("Problemas en la consulta :".mysql_error($conexion));


    ECHO $registros['idAlumno'];
    ECHO  $registros['mail'];
 

?>
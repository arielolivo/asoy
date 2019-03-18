<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>consulta</title>
</head>
<body>
    <?php
        //Con esto tenemos todo lo necesario para conectar a una base de datos
        //Los parámetros son la IP donde esté la BD, en este caso localhost, usuario, contraseña y el esquema al que nos queremos conectar
        //Si no se establece la conexión, lo que esté en die es lo que va a aparecer en ese caso de error
        $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas de conexión");
        
        //La variable registros es un array, porque en la consulta que se hace, se devuelven registros, tuplas, líneas, como quieras llamarlo
        //Al final tenemos un die que hace lo mismo que el otro, si hubo problemas, se ejecuta el die

        //En este array, cada valor del array es uno de los registros que devuelve la consulta lógicamente
        $registros = mysqli_query($conexion, "SELECT idAlumno, nombre, mail, codigocurso FROM alumnos") or die("Problemas en la consulta:" . mysqli_error($conexion));

        //Aquí estamos rellenando un variable, y la condición del while se estará cumpliendo siempre y cuando esa variable se rellene con algo
        //Fetch_array lo que hace es ir cogiendo cada uno de los registros, y por cómo funciona fetch_array internamente, puede ir cogiendo
        //uno detrás de otro consecutivamente
        while ($reg = mysqli_fetch_array($registros)) {
            echo "IdAlumno: " . $reg['idAlumno'] . "<br/>";
            echo "Nombre: " . $reg['nombre'] . "<br/>";
        }

        //Cerrar la conexión a la base de datos
        mysqli_close($conexion);
    ?>
</body>
</html>
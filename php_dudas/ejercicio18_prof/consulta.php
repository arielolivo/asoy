<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost", "root", "root", "cursophp") or die("Problemas de conexión");
        $registros = mysqli_query($conexion, "SELECT idAlumno, nombre, mail, codigocurso FROM alumnos") or die("Problemas en la consulta:".mysqli_error($conexion));
        
        while ($reg=mysqli_fetch_array($registros)) {
            echo "IdAlumno: " . $reg['idAlumno'] . "<br/>";
            echo "Nombre: " . $reg['nombre'] . "<br/>";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>
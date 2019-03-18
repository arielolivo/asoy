<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta join</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion,
            "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso
            from alumnos as alu inner join cursos as cur on alu.codigocurso = cur.idCurso")
            or die("Problemas en la consulta:" . mysqli_error($conexion));


        while ($reg = mysqli_fetch_array($registros)) {
            echo "Código: ". $reg['idAlumno'] . "<br>";
            echo "Nombre: ". $reg['nombre'] . "<br>";
            echo "Email: ". $reg['mail'] . "<br>";
            echo "Curso: ". $reg['nombreCurso'] . "<br>";
        }

        mysqli_close($conexion);
    ?>
</body>
</html>
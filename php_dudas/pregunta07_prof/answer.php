<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Consulta join</title>
</head>
<body>
    <?php
        $email = trim(htmlspecialchars(strip_tags($_REQUEST["email"]), ENT_QUOTES, "UTF-8"));
        $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion,
            "SELECT alu.idAlumno, alu.nombre, alu.mail, alu.codigocurso
            from alumnos as alu where mail = $email")
            or die("Problemas en la consulta:" . mysqli_error($conexion));


        if ($reg = mysqli_fetch_array($registros)) {
            echo "$registros[idAlumno]";
            echo "$registros[nombre]";
            echo "$registros[mail]";
            echo "$registros[nombreCurso]";
        } else {
            echo "El email no existe en la base de datos";
        }

        mysqli_close($conexion);
    ?>
</html>
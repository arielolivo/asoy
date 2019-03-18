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
    <div class="container">
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas con la conexión");
            $registros = mysqli_query($conexion,
                "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso
                from alumnos as alu inner join cursos as cur on alu.codigocurso = cur.idCurso")
                or die("Problemas en la consulta:" . mysqli_error($conexion));

            
            echo "<table class='table table-striped'>";
            echo "<tr><th>Código</th><th>Nombre</th><th>Email</th><th>Curso</th></tr>";
                while ($reg = mysqli_fetch_array($registros)) {
                    echo "<tr>";
                        echo "<td>" . $reg['idAlumno'] . "</td>";
                        echo "<td>" . $reg['nombre'] . "</td>";
                        echo "<td>" . $reg['mail'] . "</td>";
                        echo "<td>" . $reg['nombreCurso'] . "</td>";
                    echo "</tr>"; 
                }
            echo "</table>";

            mysqli_close($conexion);
        ?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script></body>
</html>
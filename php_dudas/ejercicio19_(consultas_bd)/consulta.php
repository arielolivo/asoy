<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px">
    <?php
        $conexion=mysqli_connect("localhost","root","root","cursophp") or
            die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select idAlumno, nombre, mail, codigocurso
                                from alumnos where mail='$_REQUEST[email]'") or
        die("Problemas en el select:".mysqli_error($conexion));
        if ($reg=mysqli_fetch_array($registros))
        {
            echo "<div class='card' style='width: 18rem;'>";
            echo "<div class='card-body'>";
                echo "<h5 class='card-title'>".$reg['nombre']."</h5>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>".$reg['mail']."</h6>";
                echo "<p class='card-text'>";
                switch ($reg['codigocurso']) {
                    case 1:
                        echo "PHP";
                        break;
                    case 2:
                        echo "ASP";
                        break;
                    case 3:
                        echo "JSP";
                        break;
                }
                if ($reg['codigocurso']==1) {
                    echo "PHP";
                } else if ($reg['codigocurso']==2) {
                    echo "ASP";
                } else if ($reg['codigocurso']==3) {
                    echo "JSP";
                }
                echo "</p>";
                echo "<a href='inicio.html' class='btn btn-primary'>Volver</a>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<h3>No existe un alumno con ese email.</h3>";
        }
        mysqli_close($conexion);
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
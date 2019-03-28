<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paginacion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    if (isset($_REQUEST['posicion'])) {
        $inicio=$_REQUEST['posicion'];
    }else {
        $inicio=0;
    }
        $conexion= mysqli_connect("localhost","root","","cursophp")
            or die("Problemas de conexion");
        $registros=mysqli_query($conexion,"select idAlumno,nombre,mail,codigocurso,nombreCurso
        from alumnos as alum inner join cursos as cur 
        on alum.codigocurso=cur.idCurso limit $inicio,2")
        or die("Problemas en el select".mysqli_error($conexion));
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
        echo "<div class='btn-group' role='group' aria-label='Basic example'>";
    if ($inicio==0) {
        echo "Anteriores";
    }else {
        $anterior=$inicio-2;
        echo "<button type='button' class='btn btn-secondary'><a href='paginacion.php?posicion=$anterior'>Anteriores</a></button>";
    }
    if (($inicio + $contador)<mysqli_num_rows(mysqli_query($conexion,"select * from alumnos"))) {
      $siguiente=$inicio + 2;
      echo "<button type='button' class='btn btn-secondary'><a href='paginacion.php?posicion=$siguiente'>Siguientes</a></button>";
    }else {
        echo "Siguiente";
    }
    echo "</div>";
    mysqli_close($conexion);
    ?>
 </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta Joinb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost","root","","cursophp")
            or die ("problemas con la conexion");
        $registros= mysqli_query($conexion, 
        "Select alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso from alumnos as alu inner join cursos as cur on alu.codigocurso = cur.idCurso") 
        or die("Problemas en la consulta :".mysql_error($conexion));
        ?>
        <html>
        <table class="table table-dark">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Curso</th>
        </tr>
        <?php
    while ($reg = mysqli_fetch_array($registros)) {
        echo "<tr>";
        ECHO "<td>" . $reg['idAlumno']. "</td>";
        ECHO "<td>" . $reg['nombre']. "</td>";
        ECHO "<td>" . $reg['mail']. "</td>";
        ECHO "<td>" . $reg['nombreCurso']. "</td>";
    }
    ?>
        </table>
    </html>
 
</body>
</html>
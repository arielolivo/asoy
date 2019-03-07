<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>consulta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        $conexion =mysqli_connect("localhost", "root", "cursophp") or die ("Problemas de conexion");

        $registros= mysqli_query($conexion, "SELECT idAlumno, nombre , mail, codigocurso from alumnos") or die("Problemas en la consulta : " .mysql_error($conexion));
        
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Borrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        $mail=trim(htmlspecialchars($_REQUEST["mail"], ENT_QUOTES, "UTF-8"));
        $conexion=mysqli_connect("localhost","root","","cursophp")
            or die ("Problemas en la conexion");
        $registro=mysqli_query($conexion,"select * from alumnos where mail='$mail'")
            or die("Problemas en la consulta".mysqli_error($conexion));
        if ($reg=mysql_fetch_array($registro)){

        } else {
            header("location: inicio.php?error='Email no encontrado'");
        }
        mysqli_close($conexion);
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>pregunta08</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $descripcion = trim(htmlspecialchars(strip_tags($_REQUEST["desc"]), ENT_QUOTES, "UTF-8"));
            $cantidad = trim(htmlspecialchars(strip_tags($_REQUEST["cant"]), ENT_QUOTES, "UTF-8"));
            $precio = trim(htmlspecialchars(strip_tags($_REQUEST["prec"]), ENT_QUOTES, "UTF-8"));
            $idProveedor = trim(htmlspecialchars(strip_tags($_REQUEST["idprov"]), ENT_QUOTES, "UTF-8"));

            $conexion = mysqli_connect("localhost", "root", "", "bdejemplo")
                or die("Problemas de conexión");
            mysqli_query($conexion,
                "INSERT INTO productos(descripcion, cantidad, precio, idProveedor) VALUES ('$descripcion', $cantidad, $precio, $idProveedor)")
                or die("Problemas en el insert". mysqli_error($conexion));

            mysqli_close($conexion);

            print "<h2>Producto añadido</h2>";


        ?>
        <a href="archivo1.php">Volver</a>
    </body>
</html>
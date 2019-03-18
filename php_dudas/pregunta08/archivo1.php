<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pregunta08</title>
</head>
<body>
    <?php
        //Realice el siguiente ejercicio:
        //Muestra una consulta de todos los productos de la tabla productos mostrando el nombre completo del proveedor del producto.
        //Además, muestre un mensaje indicando el precio total de todos los productos y la cantidad de productos. Añade un botón para
        //insertar un producto en la base de datos. Muestra en el formulario todos los proveedores que existen en la tabla de proveedores.
        
        
        //Abriendo la conexión
        $conexion = mysqli_connect("localhost", "root", "", "bdejemplo")
            or die("Problemas de conexión");


        //Sacando y mostrando productos + nombre del proveedor
        $productos = mysqli_query($conexion, "SELECT * FROM productos, proveedores where productos.idProveedor = proveedores.idProveedor")
            or die("Problemas en el select".mysqli_error($conexion));
        
        echo "<table>";
        echo "<tr><td>IDProducto</td><td>Descripción</td><td>Cantidad</td><td>Precio</td><td>ID Proveedor</td><td>Nombre Proveedor</td></tr>";
        while ($reg = mysqli_fetch_array($productos)) {
            echo "<tr><td>$reg[idProductos]</td><td>$reg[descripcion]</td><td>$reg[cantidad]</td><td>$reg[precio]</td><td>$reg[idProveedor]</td><td>$reg[nombre]</td></tr>";          
        }
        echo "</table>";


        //Precio total de los productos y la cantidad total de productos
        echo "<br/>";
        $total = mysqli_query($conexion, "SELECT sum(precio) AS total from productos")
            or die("Problemas en el select".mysqli_error($conexion));
        $cantidad = mysqli_query($conexion, "SELECT sum(cantidad) AS cantidad FROM productos")
            or die("Problemas en el select".mysqli_error($conexion));

        while ($tot = mysqli_fetch_array($total)) {
            echo "Valor total de los productos: $tot[total]";
            echo "<br/>";   
        }
        while ($cant = mysqli_fetch_array($cantidad)) {
            echo "Cantidad total de productos: $cant[cantidad]";
            echo "<br/>";   
        }
    ?>
    <br/>
    <br/>
    <br/>
    <form action="archivo2.php" method="post">
        <h1>FORMULARIO INSERCIÓN PRODUCTOS</h1>
        <div>
            <label for="desc">Descripción</label>
            <input type="text" name="desc" id="desc" required>
        </div>
        <div>
            <label for="cant">Cantidad</label>
            <input type="text" name="cant" id="cant" required>
        </div>
        <div>
            <label for="prec">Precio</label>
            <input type="text" name="prec" id="prec" required>
        </div>
        <div>
            <label for="idprov">ID del proveedor</label>
            <select name="idprov" id="idprov">
                <?php
                    $conexion = mysqli_connect("localhost", "root", "", "bdejemplo")
                        or die("Problemas de conexión");
                    $proveedores = mysqli_query($conexion, "SELECT idProveedor, nombre FROM proveedores")
                        or die("Problemas en el select".mysqli_error($conexion));

                    while ($reg = mysqli_fetch_array($proveedores)) {
                        echo "<option value='$reg[idProveedor]'>$reg[nombre]</option>";
                    }
                ?>
            </select>
        </div>
        <p>
            <input type="submit" value="Insertar el producto">
        </p>
    </form>
</body>
</html>

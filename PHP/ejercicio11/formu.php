<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tablas de Multiplicar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="mostrarTablas.php">
        <p>
            <label for="numTabla">Número de Tabla:</label>
            <select name="numTabla">
                <?php
                for ($i=1; $i <= 100; $i++) { 
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
        </p>
        <p>
            <input type="submit" value="Mostrar"/>
        </p>
    </form>
</body>
</html>
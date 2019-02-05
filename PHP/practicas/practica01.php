<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla</title>
</head>
<body>
    
    <?php
    $filas = 3;
    $columnas=4;
    echo "<table style='border: 2px solid black'>";
    for ($i=0; $filas; $i++) { 
        echo "<tr>";
        for ($j=0; $columnas; $j++) { 
            echo "<td>$j</td>";
        }
        echo "</tr>";
    }
    echo "</table>"
    ?>
   
</body>
</html>



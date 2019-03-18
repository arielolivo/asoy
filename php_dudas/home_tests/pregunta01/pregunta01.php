<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pregunta01php</title>
</head>
<body>
    <?php
        /*Con la función "rand" devuelva un valor entre 1 y 10. Si el valor es menor que 5 debe mostrar
        el mensaje "El valor .... es menor que 5" en rojo. Si el valor es mayor que 5 debe mostrar el
        mensaje "El valor ... es mayor que 5" en azul. Si el valor es 5 debe mostrar el mensaje
        "El valor es 5" en verde.*/
        $numero = rand(1,10);
        if ($numero < 5) {
            echo "<span style='color:red'>El valor" .  $numero . " es menor que 5</span"; //Con los echo no hace falta concatenar las cadenas con las variables
        }
        else if ($numero > 5) {
            echo "<span style='color:blue'>El valor". $numero . " es mayor que 5</span";
        }
        else {
            echo "<span style='color:green'>El valor" . $numero . " es igual que 5</span";
        } 
    ?>
</body>
</html>
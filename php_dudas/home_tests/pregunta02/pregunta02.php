<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pregunta02</title>
</head>
<body>
    <?php
        //Dados tres números indicar si alguno es suma de los otros dos y mostrarlo por pantalla
        $numero1 = rand(1,100);
        $numero2 = rand(1,100);
        $numero3 = rand(1,100);
        if ($numero1 = $numero2 + $numero3) {
            echo "$numero1 es la suma de $numero2 y $numero3";
        }
        if ($numero2 = $numero1 + $numero3) {
            echo "$numero2 es la suma de $numero1 y $numero3";
        }
        if ($numero3 = $numero1 + $numero2) {
            echo "$numero3 es la suma de $numero1 y $numero2";
        }
    ?>
</body>
</html>
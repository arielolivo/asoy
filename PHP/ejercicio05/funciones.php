<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Funciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php

        function calculaHipotenusa($par1, $par2) {
            return sqrt($par1*$par1 + $par2*$par2);
        }

        function imprimir($mensaje) {
            print "<p>$mensaje</p>";
        }

        $cat1 = 12;
        $cat2 = 16;
        $hipotenusa = calculaHipotenusa($cat1, $cat2);
        print "<p>El triángulo de lados $cat1, $cat2 y hipotenusa $hipotenusa</p>";

        imprimir("Hola que tal");
    ?>
</body>
</html>
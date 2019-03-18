<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>funciones</title>
</head>
<body>
    <?php
        //Una función o devuelve algo, o no devuelve nada
        //Se le tiene que llamar con tantos parámetros como tenga, sino ERROR
        function calculaHipotenusa($par1, $par2) {
            $hipo = sqrt($par1*$par1 + $par2*$par2); //SQRT = función que calcula la raíz cuadrada
            return $hipo;
        }
        function imprimir1($mensaje) {
            print "<p>$mensaje</p>";
        }
        function imprimir2() {
            print "Hola";
        }
        //Una variable sólo es visible en el bloque de código donde está
        //Es decir, si
        $cat1 = 12;
        $cat2 = 16;
        $hipotenusa = calculaHipotenusa($cat1, $cat2);
        print "<p>El triángulo de lados $cat1, $cat2 e hipotenusa $hipotenusa</p>";

        imprimir1("Hola que tal");
        imprimir2();
    ?>    
</body>
</html>



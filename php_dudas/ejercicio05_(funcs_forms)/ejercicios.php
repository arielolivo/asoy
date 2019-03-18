<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicios</title>
</head>
<body>
    <?php
        function calcularExtension($fichero) {
            $nombreExt = explode(".", $fichero); //Explode parte un string a partir de un delimitador, y crea un array con las partes
            return strtoupper($nombreExt[1]);
        }
        $nombreFichero = "fichero.txt";
        $ext = calcularExtension($nombreFichero);
        print "<p>La extensión del archivo $nombreFichero es $ext</p>";
        //Hace lo mismo que la de arriba, pero da igual si hay más puntos de por medio en el nombre del
        //fichero
        function calcularExtension($fichero) {
            //$nombreExt = explode(".", $fichero);
            $inicio = strrpos($fichero, ".") + 1; //+1 posición siguiente al punto
            return strtoupper(substr($fichero, $inicio));
        }
        $nombreFichero = "fichero.exe.txt";
        $ext = calcularExtension($nombreFichero);
        print "<p>La extensión del archivo $nombreFichero es $ext</p>";
    ?>
</body>
</html>

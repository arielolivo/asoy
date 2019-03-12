<?php

function calcularExtension($fichero) {
    //$nombreExt = explode(".", $fichero);
    //return strtoupper($nombreExt[1]);

    $inicio = strrpos($fichero, ".") + 1;
    return strtoupper(substr($fichero, $inicio));
}

$nombreFichero = "fichero.exe.txt";
$ext = calcularExtension($nombreFichero);
print "<p>La extensión del archivo $nombreFichero es $ext</p>";

?>
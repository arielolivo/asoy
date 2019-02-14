

<?php
//una funcion que se le pase un fichero y devuelva la extencion del fichero
function calcularExtension($fichero){
    $nombreExt = explode(".",$fichero);
    return strtoupper($nombreExt[1]);
}
$nombrefichero="fichero.txt";
$ext=calcularExtension($nombrefichero);
print "<p>La extension del archivo $nombrefichero es $ext</p>"
?>

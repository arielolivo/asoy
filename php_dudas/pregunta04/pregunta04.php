<?php
// Cree un formulario que pida un número de segundos
//y devuelva la cantidad de minutos y segundos que son.
// Debe ser un número mayor o igual que 0.
$seg = $_REQUEST["seg"];
$min = 0;
if (is_numeric($seg)) { //is_numeric devuelve true o false de una variable
    if ($seg >= 0) {
        if ($seg <= 60) {
            print "Has escrito $seg segundos";
        } else {
            while ($seg > 59) {
                $seg = $seg-60;
                $min++;
            }
            print "Tienes $min minutos y $seg segundos";
        }
    } else {
        print "$seg No es una cantidad de segundos correcta";
    }
} else {
    print "Escriba un número por favor";
}
?>
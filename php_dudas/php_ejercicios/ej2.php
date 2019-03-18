<?php
    //Escriba un formulario para introducir 3 números
    //(entre 0 y 100). Debe indicar si son iguales, si hay
    //dos iguales o si los tres son distintos.

    $num1 = trim(htmlspecialchars(strip_tags($_REQUEST["num1"]), ENT_QUOTES, "UTF-8"));
    $num2 = trim(htmlspecialchars(strip_tags($_REQUEST["num2"]), ENT_QUOTES, "UTF-8"));
    $num3 = trim(htmlspecialchars(strip_tags($_REQUEST["num3"]), ENT_QUOTES, "UTF-8"));
    
    if (!empty($num1) && !empty($num2) && !empty($num3) && is_numeric($num1) && is_numeric($num2) && is_numeric($num3) && $num1 >= 0 && $num1 <= 100 && $num2 >= 0 && $num2 <= 100 && $num3 >= 0 && $num3 <= 100) {
        if ($num1 == $num2 && $num2 == $num3) {
            echo "Todos los números son iguales";
        } else if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
            echo "Hay 2 números iguales";
        } else if ($num1 != $num2 && $num1 != $num3 && $num2 != $num3) {
            echo "Los 3 números son diferentes";
        }
    } else {
        echo "Los 3 números que introduzca, deben estar comprendidos entre 0 y 100.<br/>Tampoco se olvide de que
        deben estar rellenos los campos sólo con números.";
    } 

    


?>
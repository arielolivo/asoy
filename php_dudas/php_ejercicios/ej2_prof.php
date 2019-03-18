<?php
    //Escriba un formulario para introducir 3 números
    //(entre 0 y 100). Debe indicar si son iguales, si hay
    //dos iguales o si los tres son distintos.

    $num1 = trim(htmlspecialchars(strip_tags($_REQUEST["num1"]), ENT_QUOTES, "UTF-8"));
    $num2 = trim(htmlspecialchars(strip_tags($_REQUEST["num2"]), ENT_QUOTES, "UTF-8"));
    $num3 = trim(htmlspecialchars(strip_tags($_REQUEST["num3"]), ENT_QUOTES, "UTF-8"));
    

    //Todos los casos en los que $num1 está mal
    if (empty($num1) || !is_numeric($num1) || $num1<0 || $num1>100) {
        echo "<p>Error en NUM1</p>";
    } else if (empty($num2) || !is_numeric($num2) || $num2<0 || $num2>100) {
        echo "<p>Error en NUM2</p>";
    } else if (empty($num3) || !is_numeric($num3) || $num3<0 || $num3>100) {
        echo "<p>Error en NUM3</p>";
    } else {
        if ($num1 == $num2 && $num2 == $num3) {
            echo "<p>TODOS IGUALES</p>";
        } else if ($num1 == $num2 || $num2 == $num3 || $num1 == $num3) {
            echo "<p>HAY 2 IGUALES</p>";
        } else {
            echo "<p>SON DISTINTOS</p>";
        }
    }


?>
<?php
    //Realice un formulario para solicitar una temperatura y un desplegable que indique que
    //tipo de temperatura es, con las opciones “Celsius” o “Fahrenheit”. Al pulsar el botón
    //convertir convertirá la temperatura en la otra unidad. Deben ser valores decimales, no
    //puede ser inferior a -273,15 ºC o -459,67 ºF. Para obtener el resultado despejar la
    //siguiente fórmula “F - 32 = 1,8 * C”. Presentar el resultado con 2 decimales.

    $tempe = trim(htmlspecialchars($_REQUEST["temperatura"], ENT_QUOTES, "UTF-8"));
    $unidad = trim(htmlspecialchars($_REQUEST["opciones"], ENT_QUOTES, "UTF-8"));
    if (empty($tempe)) {
        print "<p>Temperatura Vacía</p>";
    } else if (!is_numeric($tempe)) {
        print "<p>Temperatura No Numérica</p>";
    } else if ($unidad == "c" && $tempe < -273.15) {
        print "<p>Temperatura Celsius Incorrecta</p>";
    } else if ($unidad == "f" && $tempe < -459.67) {
        print "<p>Temperatura Fahrenheit Incorrecta</p>";
    } else {
        if ($unidad == "c") {
            $resFar = round(($tempe * 1.8) + 32, 2);
            print "<p>$tempe ºC son $resFar ºF</p>";
        } else {
            $resCel = round(($tempe - 32) / 1.8, 2);
            print "<p>$tempe ºF son $resCel ºC</p>";
        }
    }

?>
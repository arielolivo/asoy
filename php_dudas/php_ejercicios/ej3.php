<?php
    //Realice un formulario para solicitar una temperatura y un desplegable que indique que
    //tipo de temperatura es, con las opciones “Celsius” o “Fahrenheit”. Al pulsar el botón
    //convertir convertirá la temperatura en la otra unidad. Deben ser valores decimales, no
    //puede ser inferior a -273,15 ºC o -459,67 ºF. Para obtener el resultado despejar la
    //siguiente fórmula “F - 32 = 1,8 * C”. Presentar el resultado con 2 decimales.

    $temp = trim(htmlspecialchars(strip_tags($_REQUEST["temp"]), ENT_QUOTES, "UTF-8"));
    $se = trim(htmlspecialchars(strip_tags($_REQUEST["select"]), ENT_QUOTES, "UTF-8"));

    //EXPLICACIÓN STRPOS
    //Con strpos estamos buscando si hay algún punto en el valor que contenga $temp
    //Si hay, entonces puede devolver true u "otra cosa". Lo que es seguro es que si no
    //encuentra un punto, devuelve false, así que por eso se dice que... 
    //SI NO ES IGUAL A FALSO, OSEA QUE ENCONTRÓ UN PUNTO, SIGNIFICA QUE ES UN NÚMERO DECIMAL
    if (!empty($temp) && is_numeric($temp) && strpos($temp, '.') !== false) {
      if ($se == "celsius" && $temp >= -273.15) {
          $result = round(32+(1.8*$temp), 2);
          echo "$temp ºC = $result ºF";
      } else if ($se == "fahrenheit" && $temp >= -459.67) {
          $result = round(($temp-32)/1.8, 2);
          echo "$temp ºF = $result ºC";
      } else {
          echo "El valor introducido no puede menor que -273,15 si es Celsius, o menor que -459,67 si
          es Fahrenheit";
      }
    } else {
        echo "Rellene el campo con un número decimal, por favor";
    }

?>

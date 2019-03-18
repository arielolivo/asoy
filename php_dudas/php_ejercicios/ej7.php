<?php
  //Escriba un año e indique si se trata de un año bisiesto. Realice todas las comprobaciones necesarios
  //en los años.

  //MÉTODO PARA COMPROBAR SI EL AÑO ES BISIESTO
  // 1. Si el año es divisible por 4, ir al paso 2. Sino, ir al paso 5.
  // 2. Si el año es divisible por 100, ir al paso 3. Sino, ir al paso 4.
  // 3. Si el año es divisible por 400, ir al paso 4. Sino, ir al paso 5.
  // 4. El año es bisiesto.
  // 5. El año no es bisiesto.

  $anyo = trim(htmlspecialchars(strip_tags($_REQUEST["anyo"]), ENT_QUOTES, "UTF-8"));

  if (!empty($anyo) && is_numeric($anyo)) {
    if ($anyo%4 == 0) {
      if ($anyo%100 == 0) {
        if ($anyo%400 == 0) {
          echo "El año es bisiesto";
        } else {
          echo "El año no es bisiesto";
        }
      } else {
        echo "El año es bisiesto";
      }
    } else {
      echo "El año no es bisiesto";
    }
  } else {
	  echo "El campo no puede estar vacío. Se debe rellenar SÓLO con un número";
	}
?>

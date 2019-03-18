<?php
  //Escriba dos números enteros para
  //comprobar si uno es múltiplo del otro


  $num1 = trim(htmlspecialchars(strip_tags($_REQUEST["num1"]), ENT_QUOTES, "UTF-8"));
  $num2 = trim(htmlspecialchars(strip_tags($_REQUEST["num2"]), ENT_QUOTES, "UTF-8"));

  if (!empty($num1) && is_numeric($num1) && !empty($num2) && is_numeric($num2)) {
    if ($num1%$num2 == 0) {
    echo "$num1 es múltiplo de $num2";
    } else {
      echo "$num1 no es múltiplo de $num2";
    }
  } else {
	  echo "Los campos no pueden estar vacíos. Se deben rellenar SÓLO con números";
	}

?>

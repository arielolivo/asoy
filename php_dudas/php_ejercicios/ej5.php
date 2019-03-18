<?php
  //Escriba su peso en kilos y su altura en centímetros. Calcule su
  //masa corporal. Compruebe que se han rellenado los campos, que
  //sean números y positivos. El índice de masa corporal es
  //peso / altura al cuadrado en metros.

  $peso = trim(htmlspecialchars(strip_tags($_REQUEST["peso"]), ENT_QUOTES, "UTF-8"));
  $altura = trim(htmlspecialchars(strip_tags($_REQUEST["altura"]), ENT_QUOTES, "UTF-8"));


  if (!empty($peso) && !empty($altura) && is_numeric($peso) && is_numeric($altura) && $peso >= 0 && $altura >= 0) {
    //Pasada de altura en cm a m
    $alturaM = $altura/100;
    //Altura en m al cuadrado
    $alturaCM = $alturaM*$alturaM;
    //Cálculo de índice de masa corporal
    $indMC = $peso/$alturaCM;

    echo "Usted pesa $peso KG, y mide $alturaM M.<br/>Por lo tanto, su IMC (índice de masa corporal) resultante es:<br/>$indMC";
  } else {
    echo "Debe introducir su peso y su altura. Además, esos valores deben ser números y positivos.";
  }

?>

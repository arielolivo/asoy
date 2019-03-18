<?php
  //Escriba una distancia en centímetros y conviértala en kilómetros, metros y centímetros.
  $distancia = trim(htmlspecialchars(strip_tags($_REQUEST["distancia"]), ENT_QUOTES, "UTF-8"));
  define("converKM", "0.00001");
  define("converM", "0.01");

  if (!empty($distancia) && is_numeric($distancia)) {
    $resultKM = $distancia*converKM;
    $resultM = $distancia*converM;
    echo "$distancia cm son $resultKM KM<br/>";
    echo "$distancia cm son $resultM M<br/>";
  } else {
	  echo "El campo no puede estar vacío. Se debe rellenar SÓLO con un número";
	}

?>

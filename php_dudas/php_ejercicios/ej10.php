<?php
  //Crear una página que convierta una cantidad de dinero en euros a su correspondiente en dólares.
  //Valide el campo 
  
  //↓MAIN↓

	//Constante conversión a dólares
	define("convertDo", "1.14");

	//Datos que nos vienen del formulario
	$euros = trim(htmlspecialchars(strip_tags($_REQUEST["euros"]), ENT_QUOTES, "UTF-8"));


  //Conversión
  
  if (is_numeric($euros) && !empty($euros)) {
    $result = $euros*convertDo;
    echo "$euros € son $result $";
  } else {
	  echo "Error, el campo debe estar relleno. El valor debe ser numérico";
  }

?>
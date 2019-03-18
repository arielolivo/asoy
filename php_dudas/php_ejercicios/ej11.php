<?php
	//ENUNCIADO EJERCICIO ANTERIOR
	//Crear una página que convierta una cantidad de dinero en euros a su correspondiente en dólares.
	//Valide el campo.

	//ENUNCIADO ÉSTE EJERCICIO
	//Amplíe el ejercicio para insertar un desplegable con posible monedas a cambiar.


	//↓MAIN↓

	//Constantes conversoras de monedas
	define("convertDo", "1.14");
	define("convertLi", "0.87");
	define("convertYe", "126.25");

	//Datos que nos vienen del formulario
	$euros = trim(htmlspecialchars(strip_tags($_REQUEST["euros"]), ENT_QUOTES, "UTF-8"));
	$se = trim(htmlspecialchars(strip_tags($_REQUEST["se"]), ENT_QUOTES, "UTF-8"));


	//Conversión

	if (!empty($euros) && is_numeric($euros)) {
		if ($se == "Do") {
			$result = $euros*convertDo;
			echo "$euros € son $result $";
		} else if ($se == "Li") {
			$result = $euros*convertLi;
			echo "$euros € son $result £";
		} else {
			$result = $euros*convertYe;
			echo "$euros € son $result ¥"; 
		}
	} else {
		echo "Introduzca un valor en euros válido por favor";
	}


?>

<?php
    //Realice un formulario que introduzca dos valores (pies y pulgadas) y los convierta a
    //centímetros. Los pies deben ser un número entero mayor o igual que cero. Las pulgadas
    //son un número entero o decimal mayor o igual que cero. Un pie son doce pulgadas y una
    //pulgada son 2,54 cm.
    

    //CONSTANTES Y VARIABLES
    define('converPiC', 30.48); //Conversor pies - cm
    define('converPlC', 2.54);  //Conversor pulgadas - cm
    $pies = trim(htmlspecialchars(strip_tags($_REQUEST["pies"]), ENT_QUOTES, "UTF-8"));
    $pulgadas = trim(htmlspecialchars(strip_tags($_REQUEST["pulgadas"]), ENT_QUOTES, "UTF-8"));


    //MAIN
    if (!empty($pies) && !empty($pulgadas) && filter_var($pies, FILTER_VALIDATE_INT) && $pies >= 0 && is_numeric($pulgadas) && $pulgadas >= 0) {
        $resultadoPiC = $pies*converPiC; //Resultado pies - cm
        echo "<b>CONVERSIÓN PIES - CENTÍMETROS</b><br/>";
        echo "$pies pies son $resultadoPiC centímetros<br/><br/>";

        $resultadoPlC = $pulgadas*converPlC; //Resultado pulgadas - cm
        echo "<b>CONVERSIÓN PULGADAS - CENTÍMETROS</b><br/>";
        echo "$pulgadas pulgadas son $resultadoPlC centímetros";

    } else {
        echo "
            <h2>ERROR</h2>
            Ambos campos deben estar rellenos<br/>
            El campo pies debe estar relleno con un número entero mayor o igual que cero<br/>
            El campo pulgadas debe estar relleno con un número entero o decimal mayor o igual que cero
        ";
    }
        
?>
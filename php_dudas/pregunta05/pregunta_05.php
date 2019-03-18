<?php
    //Escriba un formulario que indique que tabla de multiplicar queremos mostrar.
    //El número debe ser entero positivo entre 1 y 100

    $tabla = trim(htmlspecialchars(strip_tags($_REQUEST["tabla"]), ENT_QUOTES, "UTF-8"));    

    if (!empty($tabla)) {
        if (filter_var($tabla, FILTER_VALIDATE_INT) && $tabla >= 0) {
            for ($c=1; $c<=10; $c++){
                $resul = $tabla*$c;
                echo "$tabla X $c = $resul<br/>";          
            } 
        } else {
            echo "El valor introducido debe ser un número entero y positivo";
        }
    
    } else {
        echo "Rellene el campo por favor";
    }

?>
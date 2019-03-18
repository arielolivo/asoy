<?php
    //Realice un formulario que introduzca dos valores (pies y pulgadas) y los convierta a
    //centímetros. Los pies deben ser un número entero mayor o igual que cero. Las pulgadas
    //son un número entero o decimal mayor o igual que cero. Un pie son doce pulgadas y una
    //pulgada son 2,54 cm.
    

    $pies = trim(htmlspecialchars($_REQUEST["pies"], ENT_QUOTES, "UTF-8"));
    $pulgadas = trim(htmlspecialchars($_REQUEST["pulgadas"], ENT_QUOTES, "UTF-8"));
    $piesok = false;
    $pulgadasok = false;
    define('UNAPULGADA', 2.54);


    if (empty($pies)) {
        print "<p>Campo Pies vacío</p>";
    } else if (!filter_var($pies, FILTER_VALIDATE_INT)) {
        print "<p>Campo Pies No es un Número Entero</p>";
    } else if ($pies < 0) {
        print "<p>Campo Pies debe ser >= 0</p>";
    } else {
        $piesok = true;
    }

    if (empty($pulgadas)) {
        print "<p>Campo Pulgadas vacío</p>";
    } else if (!filter_var($pulgadas, FILTER_VALIDATE_FLOAT)) {
        print "<p>Campo Pulgadas No es un Número Decimal</p>";
    } else if ($pulgadas < 0) {
        print "<p>Campo Pulgadas debe ser >= 0</p>";
    } else {
        $pulgadasok = true;
    }
    
    if ($piesok && $pulgadasok) {
        $cm = ($pies * 12 + $pulgadas) * UNAPULGADA;
        print "<p>$pies pies y $pulgadas pulgadas son $cm centímetros</p>";
    }

    


?>
<?php
    $nombre= trim(htmlspecialchars( strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));
    if ($nombre !=""){
        print "<p>Su nombre es $nombre</p>";
    }
    if (insset($_REQUEST["opcion"])) {
        print "<p>Opcion marcada</p>"; 
    }
    print_r($_REQUEST);
    print_r($_FILES);
?>
is numeri
//formulario que pida la edad y si no pone un numero error
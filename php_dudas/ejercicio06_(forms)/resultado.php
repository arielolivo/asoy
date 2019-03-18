<?php

    $nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));
    //strip_tags QUITA ETIQUETAS HTML 
    //Trim sirve para quitar espacios por delante y por detrás
    //quita espacios, ampersan, doble comillas, quita etiquetas html
    //htmlspecialchars convierte caracteres especiales en entidades html
    //Por ejemplo, cambia comillas, ampersan...etc
    //ENT_QUOTES hace que se cambien tanto comillas dobles como simples
    if ($nombre != "") {
        print "<p>Su nombre es $nombre</p>";
    }

    if (isset($_REQUEST["opcion"])) {
        print "<p>Opción marcada</p>";
    }


    
    print_r($_REQUEST);
    print_r($_FILES);
?>
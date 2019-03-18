<?php
    $nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));

    session_start();
    $_SESSION['nombreWeb'] = $nombre;

    //Si añadimos unsert sobre el array de los valores de sesión, y lo aplicamos sobre una posición, un valor, borramos ese valor de sesión
    //unset($_SESSION['nombreWeb']);

    //Cambia el header de la web actual (header es un atributo del head de cada página)
    //Al cambiar el location, le estamos diciendo que vaya a tal página
    header('Location: tercera.php')
?>
<?php
    $nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));

    session_start();
    $_SESSION['nombreWeb'] = $nombre;

    //Cambia el header de la web actual (header es un atributo del head de cada página)
    //Al cambiar el location, le estamos diciendo que vaya a tal página
    header('Location: tercera.php')
?>

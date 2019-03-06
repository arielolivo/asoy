<?php
$nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));

session_start();
$_SESSION['nombreWeb'] = $nombre;

unset($_SESSION['nombreWeb']);

header('Location: tercera.php')

?>
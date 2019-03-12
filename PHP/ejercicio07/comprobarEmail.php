<?php

$email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
$reemail = trim(htmlspecialchars($_REQUEST["reemail"], ENT_QUOTES, "UTF-8"));
$noticias = trim(htmlspecialchars($_REQUEST["noticias"], ENT_QUOTES, "UTF-8"));

if (!filter_var($email, FILTER_VALIDATE_INT)) {
    print "Error en el email";
} else if (!filter_var($reemail, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email de confirmación";
} else if ($email != $reemail) {
    print "Debe coincidir el email de confirmación";
} else if ($noticias == -1) {
    print "Debe indicar si desea o no recibir noticias";
} else {
    if ($noticias == 0) {
        print "Su correo $email no va a recibir noticias";
    } else {
        print "Su correo $email va a recibir noticias";
    }
}

?>
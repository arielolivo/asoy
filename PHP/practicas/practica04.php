<?php
$confirmacion= $_REQUEST["confirmacion"] ;
$email= $_REQUEST["email"];
$notificacion= $_REQUEST["notificacion"];
    if(!filter_var($email,  FILTER_VALIDATE_EMAIL)){
        print "Error en email ";
    } 
    else if(!filter_var($confirmacion, FILTER_VALIDATE_EMAIL)){
        print "Error el email confirmacion ";
    }
    elseif ($email != $confirmacion) {
        print "Error los emails no coinciden";
    }
    elseif($notificacion==0){
        print "Debe indicar si desea o no recibir notificaciones";
    }
    else{
    if ($notificacion==2) {
        print "No recibira notificaciones";
    }
    else {
        print "SI recibira notificaciones";
    }
}


?>
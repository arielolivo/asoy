<?php
$segundos= ( $_REQUEST["number"]) ;
$MINUTOS= $segundos/60;
if ($segundos>=0) {
    print "$segundos SEGUNDOS ES IGUAL A $MINUTOS minutos" ;
}else {
    print "el numero de segundos es invalido";
}

?>
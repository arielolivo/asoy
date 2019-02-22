<?php
$pies= trim(htmlspecialchars($_REQUEST["pies"], ENT_QUOTES,"UTF-8"));
$pulgadas= trim(htmlspecialchars($_REQUEST["pulgadas"], ENT_QUOTES,"UTF-8"));

$piesok=false;
$pulgadasok=false;

define('UNAPULGADA',2.54);

if (empty($pies)){
    print "<p>Campo pies vacio</p>";
} elseif (!filter_var($pies,FILTER_VALIDATE_INT)) {

    print "<p>Campo pies no es un numero entero</p>";
} elseif ($pies<0) {
    
    print "<p>campo pies debe ser >= 0</p>";
} else {
    $piesok= true;
}

if (empty($pulgadas)){
    print "<p>Campo pulgadas vacio</p>";
} elseif (!filter_var($pulgadas,FILTER_VALIDATE_INT)) {

    print "<p>Campo pulgadas no es un numero entero</p>";
} elseif ($pulgadas<0) {
    
    print "<p>campo pulgadas debe ser >= 0</p>";
} else {
    $pulgadasok= true;
}
if ($piesok && $pulgadasok) {
    
    $cm=($pies*12+$pulgadas)* UNAPULGADA;
    print "<p>$pies pies y $pulgadas pulgadas son $cm centímetros</p>";
}
?>
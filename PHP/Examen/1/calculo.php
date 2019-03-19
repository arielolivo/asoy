<?php
$base = trim(htmlspecialchars($_REQUEST["base"], ENT_QUOTES, "UTF-8"));
$altura = trim(htmlspecialchars($_REQUEST["altura"], ENT_QUOTES, "UTF-8"));
$tipo=trim(htmlspecialchars($_REQUEST["radio"], ENT_QUOTES, "UTF-8"));
$area=$altura*$base;
$perimetro=2*($altura+$base);
if ($tipo==1) {
    echo "el area del rectangulo es = $area";
} else {
   echo "el perimetro es = $perimetro";
}
?>

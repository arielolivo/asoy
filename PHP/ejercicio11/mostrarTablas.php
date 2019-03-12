<?php
$numero = trim(htmlspecialchars($_REQUEST["numTabla"], ENT_QUOTES, "UTF-8"));

for ($i=1; $i <= 10; $i++) { 
    print "$numero x $i = " . $numero*$i . "<br/>";
}
?>
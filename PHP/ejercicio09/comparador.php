<?php
$num1= trim(htmlspecialchars($_REQUEST["num1"], ENT_QUOTES,"UTF-8"));
$num2= trim(htmlspecialchars($_REQUEST["num2"], ENT_QUOTES,"UTF-8"));
$num3= trim(htmlspecialchars($_REQUEST["num3"], ENT_QUOTES,"UTF-8"));

if (empty($num1) || is_numeric($num1) || $num1<0 || $num1>100) {
    
    print "<p>Error en NUM1</p>";

}elseif (empty($num2) || is_numeric($num2) || $num2<0 || $num2>100) {
    
    print "<p>Error en NUM2</p>";

} elseif (empty($num3) || is_numeric($num3) || $num3<0 || $num3>100) {
    
    print "<p>Error en NUM3</p>";

} else {
    if ($num1 ==$num2 && $num2== $num3) {

        print "<p>Todos iguales</p>";

    } elseif ($num1 ==$num2 || $num2== $num3 || $num1==$num3) {

        print "<p>Hay 2 iguales</p>";

    } else {
        print "<p>Son Distintos</p>";
    }       
}
?>
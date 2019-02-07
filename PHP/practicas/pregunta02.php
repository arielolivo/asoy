<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tablas de multiplicar con ciclo while</title></head>
<body bgcolor="#000000" text="#bb0000" topmargin=100>
<center>
<h1>
Programa de las tablas de multiplicar con el ciclo while<br>
<?php
$ciclo1=1;
while($ciclo1<=10)
{
echo "<table border=3><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1.":</td></tr>";
$ciclo2=1;
while($ciclo2<=10)
{
$mult=$ciclo1*$ciclo2;
echo "<tr align=center><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
$ciclo2++;
}
echo "</table>";
$ciclo1++;
}
?>
</h1>
</center>
</body>
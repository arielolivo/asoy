<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estructuras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
$contador = 0;
for ($i=6; $i >= 0; $i--) {
    if ($i % 2 == 0) {
        print "<p>$i</p>";
    } else {
        $contador++;
    }
}
echo "Hay $contador impares entre 6 y 0";

$filas = 3;
$columnas = 4;
echo "<table style='border: 2px solid black'>";
for ($i=0; $i < $filas; $i++) { 
    echo "<tr>";
    for ($j=0; $j < $columnas; $j++) { 
        echo "<td style='border: 2px solid black'>$j</td>";
    }
    echo "</tr>";
}
echo "</table>";



define("PESETAS", 166.386);

for ($i=1; $i <= 10 ; $i++) { 
    print ("$i € = " . $i*PESETAS . " pts<br/>");
}

echo "<br/>";

$hora = date("H");
if ($hora >= 8 && $hora <= 12) {
    echo "Buenos días";
} else if ($hora > 12 && $hora <= 20) {
    echo "Buenas tardes";
} else {
    echo "Buenas noches";
}

echo "<br/>"; 

$numero = rand(1, 100);
$digitos = strlen($numero);
echo "$numero tiene $digitos digitos";

if ($numero < 10) {
    $digitos = 1;
} else if ($numero < 100) {
    $digitos = 2;
} else {
    $digitos = 3;
}
echo "$numero tiene $digitos digitos";

?>

</body>
</html>
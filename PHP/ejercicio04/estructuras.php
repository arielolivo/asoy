<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estructuras</title>
</head>
<body>
    <?php
    $contador=0;
    for ($i=6; $i >=0; $i--) {
        if ($i%2 ==0) {
        print "<p>$i</p>";
    }else
    {
        $contador++;
    }
}
echo "hay $contador impares entre 6 y el 0"
    ?>
</body>
</html>
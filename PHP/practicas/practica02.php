<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesetas</title>
</head>
<body>
    <?php
    $pesetas=166.386;
    $euro = 1;
    $convertidor=$pesetas*$euro;
    for ($euro; $euro <=10 ; $euro++) { 
        echo"$euro euros es igual a $convertidor pesetas </br>" ;
    }
    ?>
</body>
</html>
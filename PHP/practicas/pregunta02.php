<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $num1=rand(1,10);
    $num2=rand(1,10);
    $num3=rand(1,10);
    echo $num1;
    echo $num2;
    echo $num3;
    if ($num1+$num2=$num3) {
        echo "el $num3 es la suma de $num1 y $num2";
    }
    ?>
</body>
</html>
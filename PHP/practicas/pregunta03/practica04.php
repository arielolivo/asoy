<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tablas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="tablas.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $num_tab=1;
        while($num_tab<=12)
    {
        print "<div> <p>Tabla de multiplicar del $num_tab</p>";
    $num2=1;
        while($num2<=12)
        {
    $resultado=$num_tab*$num2;
        echo "<p>$num_tab X $num2 = $resultado</p>";
    $num2++;
        }
    print "</div>";
    $num_tab++;
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>date</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
     $hora=date("H");
     if ($hora >= 8 ) {
         echo "buenos dias";
     }
    elseif ($hora>12) {
        echo "buenas tardes";
    }
    elseif ($hora>20) {
        # code...
    }
    ?>
</body>
</html>
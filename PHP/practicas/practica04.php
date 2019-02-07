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
    <div class="flama">
        <header>
         Tabla del 1
        </header>
        <?php
        for ($i=0; $i<=12 ; $i++) { 
            print "<p>1 x $i = $i</p>";
        }
    
        ?>
    </div>
</body>
</html>
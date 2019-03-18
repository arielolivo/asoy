<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    <p>
        <?php
            if (isset($_COOKIE['nombreUsu'])) {
                print "Hola" . $_COOKIE['nombreUsu'];
            } else {
                print "Hola Anónimo";
            }
        ?>
    </p>
    <p>
        <a href="segunda.php">Ir a Segunda</a>
    </p>
</body>
</html>
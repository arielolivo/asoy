<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    <?php
        //Nombre cookie, valor, y expiración
        setcookie("nombreUsu", "Javier", 0); //Con la expiración a 0, hacemos que nunca expire la cookie (sólo se elimina cuando se cierra el navegador)
    ?>
    <p>
        <a href="primera.php">Ir a Primera</a>
    </p>
</body>
</html>
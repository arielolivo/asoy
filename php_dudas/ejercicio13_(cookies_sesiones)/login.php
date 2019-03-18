<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form action="almacenar.php">
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email"
                value="
                    <?php
                        if (isset($_COOKIE['mailUsu'])) {
                            echo $_COOKIE['mailUsu'];
                        }
                    ?>
                "
            >
        </p>
        <p>
            <label for="password">Contraseña:</label>
            <input type="text" name="pass" id="pass">
        </p>
        <p>
            <label for="checkbox">¿Desea recordar sus datos?</label>
            <input type="checkbox" name="recordar" id="recordar"><br/>
            <input type="submit" name="submit" id="submit" value="Enviar">
        </p>
        
    </form>
</body>
</html>
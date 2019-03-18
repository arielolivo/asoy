<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primero</title>
</head>
<body>
    <div style="margin: 0 auto; width: 100px">
        <div>
            <?php
                if (isset($_REQUEST["error"])) {
                    print "<p style='color: red'> $_REQUEST[error] </p>";
                }
            ?>
        </div>
        <h1>LOGIN</h1>
        <form action="segundo.php" method="POST">
            <p>
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" value="
                    <?php
                        if (isset($_COOKIE['usuario'])) {
                            echo $_COOKIE['usuario'];
                        }
                    ?>">
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="text" name="password" id="password">
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
    </div>
</body>
</html>
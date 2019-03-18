<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>primero</title>
</head>
<body>
    <div style="margin: 0 auto; width: 200px">
        <div>
            <?php
                if (isset($_REQUEST['error'])) {
                    //Ese request sin comillas porque está dentro de un print y si fuese echo lo mismo
                    print "<p style='color:red'>$_REQUEST[error]</p>";
                }
            ?>
        </div>
        
        <form method="POST" action="segundo.php">
            <p>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario"
                    value="<?php
                        if (isset($_COOKIE["usuarioWeb"])) {
                            echo $_COOKIE["usuarioWeb"];
                        }
                    ?>"/>
            </p>

            <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
            </p>

            <p>
                <input type="submit" value="Entrar" />
            </p>
        </form>
    </div>
</body>
</html>
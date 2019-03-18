<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>segundo</title>
</head>
<body>
    <?php
        //Última URL visitada, se guarad en HTTP_REFERER
        $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
        if (!empty($referer)) {
            echo "<p><a href='$referer'>Volver</a></p>";
        } else {
            //Vuelve a lo anterior
            echo "<p><a href='javascript:history.go(-1)'>Volver</a></p>";
        }


        $usuario = trim(htmlspecialchars($_REQUEST['usuario'], ENT_QUOTES, "UTF-8"));
        $password = trim(htmlspecialchars($_REQUEST['password'], ENT_QUOTES, "UTF-8"));

        if (empty($usuario) || empty($password)) {
            //Despué del interrogante, el ampersan separa los parámetros pasados
            //header('location: primero.php?error=Debe rellenar los campos&otravar=loquesea');
            header('location: primero.php?error=Debe rellenar los campos');
        } else if ($password != "1234") {
            header('location: primero.php?error=Password incorrecta');
        } else {
            setcookie("usuarioWeb", $usuario, time()+60*60*24*365);
        
        
        
            session_start();
            $_SESSION['nombreUsuario'] = $usuario;
            ?>

            <div style="margin: 0 auto; width: 200px">
                <form method="GET" action="tercero.php">
                    <p>
                        <label for="edad">Edad:</label>
                        <input type="date" name="edad" id="edad" />
                    </p>
                    <p>
                        <input type="submit" value="Enviar" />
                    </p>
                </form>
            </div>

            <?php
        }
    ?>
</body>
</html>
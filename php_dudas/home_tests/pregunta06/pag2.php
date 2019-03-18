<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pag2</title>
</head>
<body>
    <?php
        //Guardado usuario
        $user = $_REQUEST['user'];
        setcookie ("user", $user, time()+5);

        //Guardado contraseñas
        $passEstablecida = "usuario";
        $passObtenida = $_REQUEST['pass'];

        if ( $passEstablecida == $passObtenida) {
            echo "hola";
        } else {
            setcookie ("error", "", time()+5);
            header('Location: pag1.php');    
        }

    ?>
    <br/>
    <a href="pag1.php">Volver</a>
</body>
</html>
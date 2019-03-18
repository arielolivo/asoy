<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Almacenar Cookie</title>
</head>
<body>
    <?php
        $email = trim(htmlspecialchars(strip_tags($_REQUEST["email"]), ENT_QUOTES, "UTF-8"));
        

        if (isset($_REQUEST['recordar'])) {
            setcookie ("mailUsu", $email, time()+60*60*24*365);
        } else {
            setcookie ("mailUsu", $email, time()-1000); //Con un tiempo negativo, hacemos que "ya expirase", por lo tanto la cookie se borra
        }
    ?>
    <p>
        <a href="login.php">Volver</a>
    </p>
</body>
</html>
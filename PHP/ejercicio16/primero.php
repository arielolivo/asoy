<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Primero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<div style="margin:0 auto; width:200px">
    <form method="POST" action="segundo.php">
        <P> 
            <label for="usuario"></label>
            <input type="text" name="usuario" id="usuario" value="" 
                <?php
                    if (isset($_COOKIE["usuarioweb"])) {
                        echo $_COOKIE["usuarioweb"];
                    }    
    
                ?>
            >
        </P>
        <P> 
            <label for="password"></label>
            <input type="password" name="password" id="password">
        </P>
        <P> 
            <input type="submit" value="Enviar" >
        </P>
    </form>
</div>
</body>
</html>
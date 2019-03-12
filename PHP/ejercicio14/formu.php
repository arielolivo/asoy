<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:
    <?php
        if (isset($_COOKIE['color'])) {
            echo $_COOKIE['color'];
        }
    ?>">
    <form action="cambiar.php">
        <p>
            Seleccione color de fondo:
            <input type="radio" value="#FF0000" name="color" checked>ROJO
            <input type="radio" value="#00FF00" name="color">VERDE
            <input type="radio" value="#0000FF" name="color">AZUL
        </p>
        <p>
            <input type="submit" value="Enviar"/>
        </p>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
</head>
<body>
  <?php
    session_start();
  ?>
    <form action="segunda.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php
                                                                  if (isset($_SESSION["nombreWeb"])) {
                                                                    //Si se utiliza echo, no poner comillas para sacar valores de un array
                                                                    //Si se utiliza print, se pueden poner comillas para sacar valores de un array,
                                                                    //pero hace falta concatenar los string de texto con las variables con .
                                                                    echo "$_SESSION[nombreWeb]";
                                                                  } else {
                                                                    echo "Sin Nombre";
                                                                  }
                                                                ?>"/>
        </p>
        <p>
            <input type="submit" value="Enviar"/>
        </p>
    </form>
</body>
</html>

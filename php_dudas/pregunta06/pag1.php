<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form action="pag2.php">
        <?php
        //Utilizar cookies y sesiones. 
        //En la primera página debe existir un formulario con el usuario y la password.
        //El usuario se debe guardar para que aparezca relleno la próxima vez que entre.

        //Al enviar el formulario vamos a una segunda página donde comprobamos si la
        //password es correcta. Si no lo es, volver a la página principal y mostrar un
        //error.
        //Si es correcta, mostrar un formulario para rellenar la fecha de nacimiento del
        //usuario.

        //Al enviar el formulario, vamos a una tercera página donde se le mostrará al
        //usuario un mensaje de bienvenida con su nombre de usuario y su edad en años.

        //Todas las páginas tienen que tener un botón volver.
        ?>
        <label for="user">User:</label>
        <input type="text" name="user" id="user"
            value="<?php
                        if (isset($_COOKIE['user'])) {
                            echo $_COOKIE['user'];
                        }
                    ?>"
        ><br/>
        <label for="password">Password:</label>
        <input type="text" name="pass" id="pass"><br/>

        <input type="submit" name="submit" id="submit" value="Enviar">
            
        </form>
        <?php
            if (isset($_COOKIE['error'])) {
                echo "La contrasena no es correcta";
            }
        ?>
  
</body>
</html>

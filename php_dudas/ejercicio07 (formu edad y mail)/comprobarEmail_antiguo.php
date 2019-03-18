<?php
//form que pida edad y si ha puesto un número, que diga edad, y si no ha puesto un número, error al escribir la edad 
//is_numeric


//En $_REQUEST, se almacena el array con los name de cada campo,
//y como valor, el value de cada input. Value por ejemplo
//en un text, sería lo que escribíeramos


$email = $_REQUEST["email"];
$confirm = $_REQUEST["confirm"];
$news = $_REQUEST["news"];



// ! Si lo que viene después se evalúa falso, entramos en el
// if, porque SE CUMPLE LA CONDICIÓN DADA

//Filter var sirve para filtrar variables, es decir, en este caso tenemos email y FILTER_VALIDATE_EMAIL. Con la función filter_var, le tenemos que pasar una variable,
//y la manera en que la va a filtrar. El resultado de filter_var es true o false. En este caso, lo que haya en email, va a comprobar que sea un email, es decir,
//que tenga arrobas, .com....lo que sea. Si eso es así, es verdadero el filtro. En este caso, como tenemos la exclamación, significa que si no se cumple lo dicho
//pasa al if. "Si no se cumple que sea un email correcto, va a decir que error en el email"
//Para terminar, al igual que FILTER_VALIDATE_EMAIL, están otros filtros para validar que una cadena sea correcta, como FILTER_VALIDATE_BOOLEAN (que sea booleano)
//FILTER_VALIDATE_FLOAT (que sea un número con decimales, es decir, que sea un valor con un punto en medio, y números a cada lado)
//Existen más filtros, pero esos son algunos ejemplos

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email";
} else if (!filter_var($confirm, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email de confirmación";
} else if ($email != $confirm) {
    print "Debe coincidir el email de confirmación";
} else if ($news == -1) {
    print "Debe indicar si desea indicar o no recibir noticias";
} else {
    if ($news == 0) {
        print "Su correo $email no va a recibir noticias";
    } else {
        print "Su correo $email va a recibir noticias";
    }
}





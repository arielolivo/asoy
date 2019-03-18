<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    <?php
        echo "Hola";
        echo "<b>Hola</b> a todos";
        print "<p>Hola</p>\n";
        $saludo = "Holaaa";
        echo "<b>$saludo</b>";
        echo "<br/>Mensaje: <b>" . $saludo . "</b>. Fin mensaje</br>";
    ?>
    <?=$saludo?>

    <?php
        $a = 8;
        $b = 2;
        $c = 2;
        echo $a + $b, "<br/>";
        $resultado = $a - $b;
        echo $resultado;
        echo "$resultado<br/>";
        $a++;
        $a = $a + 1;
        $a--;
        $a = $a - 1;

        echo $a != $b, "<br/>";
        
        echo ($a == $b) || ($c == $b), "<br/>"; //OR
        echo ($a == $b) && ($c == $b), "<br/>"; //AND

        echo !($b <= $c), "<br/>"; //! Evaluación de la variable al contrario

        $perimetro = 2 * 3.14 * 15; //Podemos hacer operaciones para el valor de una variable
        print $perimetro;
        print 2 * $perimetro;

        $tabla = ["valor1", "valor2"];
        echo $tabla[0]; //0 posición primera
        echo "<br/>";

        $tabla2 = [["msg1", "msg2"], ["msg3", "msg4"]];

        echo $tabla2[1][1], "<br/>";

        $correcto = true;
        if (!$correcto) {
            print "<p>Es correcto</p>";
        }

        $texto = "Este texto";
        $texto[0] = "e";
        echo $texto, "<br/>";
        $texto[15] = "F"; //Aunque en la variable no haya hasta esa posición, rellena con 0s, debería, hasta en al posición indicada poner el texto
        print $texto . "<br/>";

        $tabla3 = ["Hola", 2019];
        print $tabla3[0] . " - " . $tabla3[1] . "<br/>"; //con print se permite concatenar con .

        $tabla3[] = "Fin"; //Añadir valor a la variable si no decimos posición, al final la añade
        print $tabla3[2];

        //Borrar un valor
        // unset($tabla3[2]); //Las comenta para poder seguir utilizando valores
        print $tabla3[2];

        // unset($tabla3); //Las comenta para poder seguir utilizando valores
        print $tabla3[0];

        echo count($tabla3) , "<br/>";

        $numeros = [15, 10, 5, 15, 11, 15];
        echo max($numeros) , "<br/>"; //Para concatenas texto con variables, se usa , en los echos
        echo min($numeros) , "<br/>";

        //sort($numeros); //Lo ordena para siempre, ha cambiado la variable en sí
        print_r($numeros); //Print_r significa recursivo

        if (in_array(15, $numeros)) { //Si dentro de un array, está el valor 15 en la variable $numeros 
            print "Está el 15";
        } else {
            print "No está";
        }

        echo "<br/>" , array_search(15, $numeros); //Devuelve la primera vez que lo encuentra el valor

        $encontrados = array_keys($numeros, 15); //Devuelve todas las veces que lo encuentra
        print_r($encontrados);

        print "<br/>";
        shuffle($numeros);
        print_r($numeros);

        print "<br/>";

        echo array_rand($numeros); //Saca la posición de un número al azar
        print "<br/>";
        echo $numeros[array_rand($numeros)]; //Saca un número al azar

        define("PI", 3.14); //Sirve para definir constantes
        print "<p>EL valor de PI es " . PI . "</p>"; //Variables en minúscula, constantes en mayúscula. Las constantes no deben cambiar de valor, valor fijo

        print "<pre>";
        print_r(get_defined_constants()); //Función que muestra todas las constantes definidas
        print "</pre>";



        //EXPLICACIÓN DE LAS 2 ÚLTIMAS FUNCIONES
        //PHP_INT_MAX (integer)
        //The largest integer supported in this build of PHP. Usually int(2147483647). Available since PHP 5.0.5
        //
        //PHP_INT_SIZE (integer)
        //The size of an integer in bytes in this build of PHP. Available since PHP 5.0.5 
        
        $maximo = PHP_INT_MAX;
        $maximo2 = PHP_INT_SIZE;
        echo $maximo;
        echo "<br/>";
        echo $maximo2;
    ?>
</body>
</html>
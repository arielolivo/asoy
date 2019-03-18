<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>pregunta03</title>
    </head>
    <body>
        <?php //1. Desarrolle un ejercicio que muestre las tablas de multiplicar 
            $i=1;
            for ($i=1;$i<=10;$i++) {
                print "<div style='border: 1px solid black'>";
                for ($j=0;$j<=10;$j++) {
                    $resul=$i*$j;
                    echo "$i X $j = $resul <br/>";
                }
                print "</div>";
            }    
            print "<br/>";
        ?>
        <?php
        //2. Mostramos los números de los días del 1 a la fecha actual.
        //Ejemplo: si hoy es 11 debe mostrar los números del 1 al 11.
            $hoy=date("j");
            for ($i=1; $i<=$hoy ; $i++) { 
                echo "Día $i <br/>";    
            }
        ?>
        <?php 
            //3. Dado un vector de números positivos desordenado, recórralo y muestre lo
            //3 números mayores.
            echo "<br/><br/>A continuación veremos el contenido del array <br/><br/>";
            $array=[];
            for ($i=0; $i<10 ; $i++) {
                $array[$i]=rand(1,10);
                echo $array[$i] , "<br/>";
            }
            print "<br/>";

            rsort($array);
            print "<br/>";
            print "<br/>";

            for ($i=0; $i<3 ; $i++) { 
                if ($i==0) {
                    echo "Este es el mayor de todos los números: $array[$i]<br/>";
                }   else if ($i==1) {
                    echo "Este es el segundo mayor número: $array[$i]<br/>";
                }   else {
                    echo "Este es el tercer mayor número: $array[$i]<br/>";
                }
            }
        ?>
    </body>
</html>
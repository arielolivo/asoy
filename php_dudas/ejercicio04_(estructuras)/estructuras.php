<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estructuras</title>
</head>
<body>
    <?php
        //cuente de dos en dos
        for ($i=0; $i < 6 ; $i=$i+2) { 
            print "$i\n";
        }
        print "<br/>";

        //cuenta hacia atrás
        for ($i=6; $i >= 0 ; $i--) { 
            print "$i\n";
        }

        //muestre los pares
        for ($i=6; $i >= 0 ; $i--) { 
            if ($i%2 == 0) {
                print "$i\n";
            }
        }

        //cuente los impares
        $contador = 0;
        for ($i=6; $i >= 0 ; $i--) { 
            if ($i%2 == 0) {
                print "<p>$i</p>";
            } else {
                $contador++;
            }
        }
        echo "Hay $contador impares entre 6 y 0";

        

    ?>
    <?php
        $filas= 3;
        $columnas = 4;
        echo "<table style='border: 2px solid black'>";
        for ($i=0;$i<$filas;$i++) {
            echo "<tr>";
            for ($j=0; $j < $columnas; $j++) {
                echo "<td style='border: 2px solid black'>$j</td>";
            }
            echo "</tr>";
        }
        echo "</table";
    ?>
    <?php
        //Enunciado muestre por pantalla del 1 al 10 la conversión en pesetas (1 euro son = pesetas)
        define("PESETAS", 166.386);
        for ($i=1;$i<=10;$i++) {
            print ("$i € = " . $i * PESETAS . "pts<br/>"); 
        }
        echo "<br/>";
    ?>
    
    <?php
        $hora = date("H");
        if ($hora >= 8 && $hora <= 12) {
            echo "Buenos días";
        } else if ($hora > 12 && $hora <= 20) {
            echo "Buenas tardes";
        } else {
            echo "Buenas noches";
        }
    ?>

    <?php
        echo "<br/>";
        //Genera un valor aleatorio entre 1 y 100, e indica cuántos dígitos tiene
        $alea = rand(1,100);
        $digits = strlen($alea);
        echo "$alea tiene $digits dígitos";
        
    ?>

</body>
</html>
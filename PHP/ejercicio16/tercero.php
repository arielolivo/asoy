<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tercero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <div style="margin:0 auto; width:200px">
        <?php
            print "<p>Fecha nacimiento: $_REQUEST[edad]</p>";
            print "<p>Fecha Actual : ". date('Y-m-d') . "</p>";
            //calcular la diferencia entre nacimieno y fecha actual
            list($year, $month, $day) = explode("-", $_REQUEST['edad']);
                $year_diff =date("Y") - $year;
                $month_diff= date("m")- $month;
                $day_diff=date ("d") - $day;
                    if ($day_diff <0 || ($month_diff =0 && $day_diff<0)){
                        $year_diff--;
                    }
                
                session_start();
                    print "<p>Bienvenido $_SESSION[nombreusuario]</p>";
                    print "<p>Su edad es $year_diff años</p>"
        ?>
    </div>
</body>
</html>
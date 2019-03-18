<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tercero</title>
</head>
<body>
    <?php 
        $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
        if (!empty($referer)) {
		    echo '<p><a href="'. $referer .'" title="Volver">&laquo; Atrás</a></p>';
		} else {
            echo '<p><a href="javascript:history.go(-1)" title="Volver">&laquo; Atrás</a></p>';
		}
    ?>
    <?php
        print "<div style='margin: 0 auto; width: 400px'>";
        print "<p>Fecha de Nacimiento: " . $_REQUEST['edad'] . "<p/>";
        print "<p>Fecha Actual: " . date('Y-m-d') . "</p>";
        list($year,$month,$day) = explode("-",$_REQUEST['edad']);
        $year_diff  = date("Y") - $year;
        $month_diff = date("m") - $month;
        $day_diff   = date("d") - $day;
        if ($day_diff < 0 && $month_diff < 0)
        $year_diff--;
        session_start();
        print "<p>Bienvenido ". $_SESSION['nombreUsuario'] ."</p>";
        print "<p>Edad: ". $year_diff ." años </p>";
        print "</div>";
    ?>
</body>
</html>
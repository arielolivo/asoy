<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tablas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="tablas.css" />
    <script src="main.js"></script>
<style>
div {
    font-size: 15px;
    font-style: oblique;
    border: black 5px solid ;
    margin: 10px;
    padding: 10px;
    float: left;
    background-color:#989C9C;
    width: auto;
    height: auto;
   }
</style>
</head>
<body>
    <?php
    
   for ($num=1; $num <=12 ; $num++) { 
       print "<div><p>Tabla de multiplicar del $num </p>";

       for ($num2=1; $num2<=12 ; $num2++) { 
           $resultado=$num*$num2;
           print "<p>$num x $num2 = $resultado</p>";
       }
       print"</div>";
   }
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
    .rojo{
        color: red;
    }
    .azul{
        color: blue;
    }
    .verde{
        color: green;
    }
    </style>
</head>
<body>
      <?php
          $numero = rand(1, 10);
          if ($numero < 5){
          echo "<p class=rojo>El valor $numero  es menor que 5</p>";
          }
          else if ($numero > 5){
          echo "<p class=azul >El valor $numero  es mayor que 5</p>";
          }
          else{
          echo "<p class=verde>El valor es 5</p>";
          }
          ?>
</body>
</html>
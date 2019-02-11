<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>vectores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php
 
 for (i=0; i<n-1; i++)
 {
    for (j=i+1; j<n; j++)
   {
     if(V[i]>V[j])
     {
      aux = V[i];
      V[i] = V[j];
      V[j] = aux;
     }
   }
 }
 ?>
</body>
</html>
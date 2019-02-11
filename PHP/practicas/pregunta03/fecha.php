<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fecha</title>
  <style>
  div{
    float: left;
    margin: 15px;
    padding: 15px;
  }
  </style>
</head>
<body>
<?php
$num=1;
print "<div>";
while($num<=date("d"))
{
  print "<p>$num</p>";
  $num++;
}
print "</div>";
?>

<?php
print "<div>";
for ($i=1; $i<=date("d") ; $i++) { 
 print "<p>$i</p>"; 
}
print "</div>";
?>


</body>
</html>

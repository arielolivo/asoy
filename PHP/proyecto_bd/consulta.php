<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estacion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.boton{
  width:200px;
height:200px;
margin: 10px;
}
</style>
</head>
<body>
<div class="container">
    <br>
    <form >
    <div class="form-group">
  <label for="example-date-input" class="col-2 col-form-label">Fecha desde</label>
  <div class="col-5">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
  <label for="example-date-input" class="col-2 col-form-label">Fecha hasta</label>
  <div class="col-5">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
  <label class="col-2 col-form-label" for="inlineFormCustomSelect">Tipo de medida</label>
  <div class="col-5">
  <select class="form-control" id="inlineFormCustomSelect">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  </div>
  <label for="example-text-input" class="col-2 col-form-label">Valor medida</label>
  <div class="col-5">
    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
  </div>
  <div style="position:absolute; top:53px; left:700px;">
  <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"style="width:276px;
height:276px;
margin: 10px;">
  Enviar
</button>
</div>
</div> 

 
</form>

    <?php
        $conexion= mysqli_connect("localhost","root","","estacion")
            or die("Problemas de conexion");
        $registros=mysqli_query($conexion,"select Codigo, Marca, Modelo, IP, Modo_de_conexion, Ubicacion
                                            from estaciones")
            or die("Problemas en el select".mysqli_error($conexion));
            echo "<br>";
            echo "<table class='table table-striped'>";
            echo "<tr><th>Código</th><th>Marca</th><th>Modelo</th><th>IP</th><th>Modo de conexion</th><th>Ubicacion</th></tr>";
                while ($reg = mysqli_fetch_array($registros)) {
                    echo "<tr>";
                        echo "<td>" . $reg['Codigo'] . "</td>";
                        echo "<td>" . $reg['Marca'] . "</td>";
                        echo "<td>" . $reg['Modelo'] . "</td>";
                        echo "<td>" . $reg['IP'] . "</td>";
                        echo "<td>" . $reg['Modo_de_conexion'] . "</td>";
                        echo "<td>" . $reg['Ubicacion'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
        mysqli_close($conexion);
    ?>
      <button class="btn btn-primary" type="submit">Reestablecer</button>
</form>
</div>
</body>
</html>
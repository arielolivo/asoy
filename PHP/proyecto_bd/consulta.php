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
<link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.2/css/themes/default/jquery.mobile-1.4.2.min.css">  
<script src="https://demos.jquerymobile.com/1.4.2/js/jquery.js"></script>
	<script src="https://demos.jquerymobile.com/1.4.2/js/jquery.mobile-1.4.2.min.js"></script>
<style>
 
 .ui-slider .ui-btn-inner {
    padding: 2px 0 0 0 !important;
}
 
.ui-slider-popup {
    position: absolute !important;
    width: 64px;
    height: 64px;
    text-align: center;
    font-size: 36px;
    padding-top: 10px;
    z-index: 100;
    opacity: 0.8;
}
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
  <div data-role="rangeslider" for="example-text-input" class="col-5 col-form-label">
        <label for="range-1a">Valor medida</label>
        <input type="range" name="range-1a" id="range-1a" min="0" max="100" value="40" data-popup-enabled="true" data-show-value="true">
        <label for="range-1b">Rangeslider:</label>
        <input type="range" name="range-1b" id="range-1b" min="0" max="100" value="80" data-popup-enabled="true" data-show-value="true">
    </div>
  <div style="position:absolute; top:60px; left:800px;">
  <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"style="width:276px;
height:276px;
margin: 10px;">
  Enviar
</button>
</div>
</div> 

 
</form>

    <?php
        $conexion= mysqli_connect("localhost","root","","ESTACION")
            or die("Problemas de conexion");
        $registros=mysqli_query($conexion,"select Codigo, Marca, Modelo, IP, Modo_de_conexion, Ubicacion
                                            from Estaciones")
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
      <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" type="submit">Reestablecer</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
</div>
</body>
</html>
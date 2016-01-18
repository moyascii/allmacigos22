<?php
  include 'funciones/conexion.php';
  conecta();
  if (isset($_GET['idEspecie'])) {
    $dat=mysql_fetch_array(mysql_query("SELECT * from especie where ESPECIE_ID=".$_GET['idEspecie']));
    $nombreEspecie=$dat['ESPECIE_NOMBRE'];
    $estadoEspecie=$dat['ESPECIE_ESTADO'];
    $tp=1;
  }else{
    $tp=0;
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrar - Especie: Ingresar</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include("template/navBar.php") ?>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1>Especies: Ingresar</h1>
        <hr>
        <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Ingresar Especie</h3>
            </div>
            <div class="panel-body">
              <form action="administrarEspecie.php" method="POST" role="form">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label>Nombre de la Especie</label>
                    <input  value="<?php echo $nombreEspecie; ?>" type="text" class="form-control" id="nombreEspecie" name="nombreEspecie" placeholder="Ingrese Nombre de la Especie" required="required">
                  </div>
                </div>
                <div class="col-lg-12">
                <?php if (isset($_GET['idEspecie'])): ?>
                  <button type="submit" class="btn btn-primary">Modificar</button>
                <?php else: ?>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                <?php endif ?>
                  
                  <!-- Ocultos -->
                  <input type="hidden" name="tp" id="tp" value="<?php echo $tp; ?>">
                  <input type="hidden" name="idEspecie" id="idEspecie" value="<?php echo $_GET['idEspecie']; ?>">
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
   
  </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</html>
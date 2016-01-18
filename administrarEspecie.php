<?php
  include 'funciones/conexion.php';
  conecta();
  if (isset($_POST['tp']) and $_POST['tp']==0) {
    mysql_query("INSERT into especie set ESPECIE_NOMBRE='".$_POST['nombreEspecie']."'");
    header("Location:administrarEspecie.php");
  }
  if (isset($_POST['tp'])  and $_POST['tp']==1) {
    mysql_query("UPDATE especie set ESPECIE_NOMBRE='".$_POST['nombreEspecie']."' where ESPECIE_ID=".$_POST['idEspecie']);
    header("Location:administrarEspecie.php");
  }
  if (isset($_GET['idEliminar'])) {
    mysql_query("DELETE from especie where ESPECIE_ID=".$_GET['idEliminar']);
    header("Location:administrarEspecie.php");
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

    <title>Administración - Especie</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include("template/navBar.php") ?>

  </head>
  <body>
  <div class="container">
    <div class="row">
      <h1>Especies</h1>
      <hr>
      <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Administrar Especie</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Especie</th>
                    <th>Estado</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $contador=1;
                  $result=mysql_query("SELECT * from especie");
                  $tot=mysql_num_rows($result);
                  echo $tot;
                  if ($tot!=0) {
                    while ($dat = mysql_fetch_array($result)) {
                      $estado = ($dat['ESPECIE_ESTADO']==0) ? "Habilitado" : "Deshabilitado" ;
                    ?>
                    <tr>
                      <td><?php echo $contador; ?></td>
                      <td><?php echo $dat['ESPECIE_NOMBRE']; ?></td>
                      <td><?php echo $estado; ?></td>
                      <td><button type="button" class="btn btn-default" onclick="javascript:window.location.href='administrarEspecieIngresar.php?idEspecie=<?php echo $dat['ESPECIE_ID']; ?>'">Modificar</button></td>
                      <td><button type="button" class="btn btn-default" onclick="javascript:window.location.href='administrarEspecie.php?idEliminar=<?php echo $dat['ESPECIE_ID']; ?>'">Eliminar</button></td>
                    </tr>
                    <?php
                        $contador++;
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
          <button type="button" class="btn btn-info" onclick="javascript:window.location.href='home.php'">Volver</button>&nbsp;
          <button type="button" class="btn btn-primary" onclick="javascript:window.location.href='administrarEspecieIngresar.php'">+ Agregar Especie</button>
    </div>
  </div>
  </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/dist/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</html>
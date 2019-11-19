<?php
  include "../acciones/session.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <title>Ingreso de Vehículo</title>
  </head>
  <body>
    <header>
      <?php 
        include "../componentes/header.php";
      ?>
    </header>
    <!-- Begin page content -->
    <main role="main" class="container  mt-5">
      <div class="row justify-content-center">
        <div class="col-5">
          <form action="../acciones/hacerVehiculo.php">
            <h1 class="h3 mb-3 text-center font-weight-normal">Ingreso de vehículo</h1>
            <div class="form-group">
              <label>Patente</label>
              <input type="text" name="inputPatente" class="form-control"  aria-describedby="emailHelp" placeholder="Ingresar patente">
            </div>                        
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <?php 
            if (isset($_GET['exito'])) 
            {        
              echo '<p>Vehiculo ingresado!</p>'; 
            }
            else if (isset($_GET['vehiculoestacionado']))
            {
              echo '<p>Este vehiculo ya esta estacionado!</p>'; 
            }
            ?>
          </form>
        </div>        
      </div>       
    </main>
    <footer class="footer">
      <?php  
        include "../componentes/footer.php";
      ?>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
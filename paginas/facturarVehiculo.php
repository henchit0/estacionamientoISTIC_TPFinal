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
    <main role="main" class="container mt-5">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Facturar vehículo</h1>
      </div>
      <div class="row">
        <div class="col-sm-6" style="margin-bottom: 50px;">
          <div class="row">
            <div class="col-sm-10 mb-3">
              <form action="../acciones/hacerFacturar.php">              
                <div class="form-group">
                  <label for="exampleInputEmail1">Patente</label>
                  <input type="text" class="form-control" name="inputPatente" placeholder="Ingresa patente">
                </div>
                <button type="submit" class="btn btn-primary">Facturar</button>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-sm 10 mt-3">            
              <?php 
                if (isset($_GET['exito']))
                {        
                    echo '<p>Vehiculo facturado!</p>'; 
                }
                else if (isset($_GET['cobrar'])) 
                { 
                  $patente = $_GET['patente'];
                  $aPagar = $_GET['cobrar'];
                  $ingreso = $_GET['ingreso'];
                  $salida = $_GET['salida'];
                  $estadia = $_GET['estadia'];
                  
                  echo "<label>Vehiculo facturado: ".$patente."</label><br>";
                  echo "<label>Fecha de ingreso: ".date("d-m-y H:i",$ingreso)."</label><br>";
                  echo "<label>Fecha de salida: ".date("d-m-y H:i",$salida)."</label><br>";
                  echo "<label>Cantidad de horas de estadia: ".$estadia."</label><br>";
                  echo "<label>Total a pagar: $".$aPagar."</label><br>";
                }
                else if (isset($_GET['error'])) 
                {
                  echo '<p>No existe un vehiculo con esa patente!</p>';  
                }
                ?>
            </div>
          </div>        
        </div>
        <div class="col-sm-6">
          <table class="table table-hover">
            <thead thead-dark>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Patente</th>
                <th scope="col">Hora de Ingreso</th>
              </tr>
            </thead>      
            <tbody>        
                <?php
                  include "../acciones/AccesoDatos.php";

                  $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                  $consulta =$objetoAccesoDato->RetornarConsulta("select * from vehiculosestacionados");
                  $consulta->execute();     
                  $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);

                  $contador = 1;

                  foreach ($datos as $vehiculos) 
                  {
                    
                    echo "<tr><th scope='row'>".$contador."</th>";
                    echo "<td>".$vehiculos['patente']."</td>";
                    echo "<td>".date("d-m-y H:i",$vehiculos['horaIngreso'])."</td></tr>";
                    $contador++ ;
                  }        
                ?>                
            </tbody>
          </table>
        </div>    
      </div>
    </main>

    <footer class="footer">
      <?php  
        include "../componentes/footer.php";
      ?>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
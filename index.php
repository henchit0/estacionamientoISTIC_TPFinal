<?php  
	session_start();
	include "acciones/AccesoDatos.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <title>Home</title>
  </head>
  <header>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	  <a class="navbar-brand" href="#">Rosso</a>
  	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  	    <span class="navbar-toggler-icon"></span>
  	  </button>
  	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	    <ul class="navbar-nav mr-auto">
  		  <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>          
        </li>
        <?php 
          if (isset($_SESSION['idDeUsuario']) && $_SESSION['perfil'] == 'Admin')
          {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="paginas/ingresoVehiculo.php">Ingresar Vehiculo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="paginas/facturarVehiculo.php">Facturar Vehiculo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="paginas/listarVehiculos.php">Listar Vehiculos</a>
          </li>           
          <li class="nav-item">
            <a class="nav-link" href="paginas/listarUsuarios.php">Listar Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="paginas/historicoVehiculos.php">Historial Vehiculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acciones/hacerLogout.php">Logout</a>
          </li>
          <?php 
          }
          	elseif (isset($_SESSION['idDeUsuario']) && $_SESSION['perfil'] == 'Cajero') 
          {                
          ?>           
            <li class="nav-item">
              <a class="nav-link" href="paginas/ingresoVehiculo.php">Ingresar Vehiculo</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="paginas/facturarVehiculo.php">Facturar Vehiculo</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="paginas/listarVehiculos.php">Listar Vehiculos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="acciones/hacerLogout.php">Logout</a>
            </li> 
          <?php  
          }
           else
          {
          ?> 
            <li class="nav-item">
              <a class="nav-link" href="paginas/registro.php">Registrate</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="paginas/login.php">Login</a>
            </li>
          <?php 
          }
          ?>
  	    </ul>	    
	    </div>
	  </nav>  	
  </header><!-- /header -->
  <body class="bg-body">
    <main role="main" class="container mt-5">
    	    
    </main>	

	<footer class="footer bg-dark">
      <?php 
		if(isset($_SESSION['idDeUsuario']))
		{//solo muestra el menu si estas con la variable de sesión instaciada
		?>
			<div class="container">
			  <span class="text-muted">Bienvenido <?php echo $_SESSION['idDeUsuario'];?></span>  
			  <span class="text-muted">. Ingreso <?php echo date("d-m-y H:i",$_SESSION['horaIngreso']) ?></span>
			</div>
			<?php 
			  }
			  else
			  {
			?>
			  <div class="container">
			    <span class="text-muted">Bienvenidos al Estacionamiento Rosso</span>  
			  </div>
			<?php
		}
	  ?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
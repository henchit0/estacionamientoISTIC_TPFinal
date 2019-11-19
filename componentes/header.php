<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
	  <a class="navbar-brand" href="#">Rosso</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
		    <li class="nav-item">
            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>          
        </li>
        <?php 
          if (isset($_SESSION['idDeUsuario']) && $_SESSION['perfil'] == 'admin')
        {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="../paginas/ingresoVehiculo.php">Ingresar Vehiculo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../paginas/facturarVehiculo.php">Facturar Vehiculo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../paginas/listarVehiculos.php">Listar Vehiculos</a>
          </li>
             
          <li class="nav-item">
            <a class="nav-link" href="../paginas/listarUsuarios.php">Listar Usuarios</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../paginas/historicoVehiculos.php">Historial Vehiculos</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="../acciones/hacerLogout.php">Logout</a>
          </li>
        <?php 
        }
         elseif (isset($_SESSION['idDeUsuario']) && $_SESSION['perfil'] == 'cajero') 
        {                
        ?>          
           <li class="nav-item">
            <a class="nav-link" href="../paginas/ingresoVehiculo.php">Ingresar Vehiculo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../paginas/facturarVehiculo.php">Facturar Vehiculo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../paginas/listarVehiculos.php">Listar Vehiculos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../acciones/hacerLogout.php">Logout</a>
          </li> -->
        <?php  
        }
         else
        {
        ?> 
          <li class="nav-item">
            <a class="nav-link" href="../paginas/registro.php">Registrate</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../paginas/login.php">Login</a>
          </li>
        <?php 
        }
        ?>
	    </ul>	    
	  </div>
	</nav>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <link href="../img/icon.ico">
	  <a class="navbar-brand" href="#"><img src="../img/icons8_car_3.ico"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
		    <li class="nav-item">
            <a class="nav-link" href="../index.php" id="home">Home <span class="sr-only">(current)</span></a>          
        </li>
        <?php 
          if (isset($_SESSION['idDeUsuario']) && $_SESSION['perfil'] == 'Admin')
        {
        ?>
          <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='ingresoVehiculo.php')?'detalle':''; ?>" href="../paginas/ingresoVehiculo.php">Ingresar Vehiculo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='facturarVehiculo.php')?'detalle':''; ?>" href="../paginas/facturarVehiculo.php">Facturar Vehiculo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='listarVehiculos.php')?'detalle':''; ?>" href="../paginas/listarVehiculos.php">Listar Vehiculos</a>
          </li>
             
          <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='listarUsuarios.php')?'detalle':''; ?>" href="../paginas/listarUsuarios.php">Listar Usuarios</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='historicoVehiculos.php')?'detalle':''; ?>" href="../paginas/historicoVehiculos.php">Historial Vehiculos</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="../acciones/hacerLogout.php"><img class="pr-2" src="../img/icons8_export_16px.png">Logout</a>
          </li>
        <?php 
        }
         elseif (isset($_SESSION['idDeUsuario']) && $_SESSION['perfil'] == 'Cajero') 
        {                
        ?>          
           <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='ingresoVehiculo.php')?'detalle':''; ?>" href="../paginas/ingresoVehiculo.php">Ingresar Vehiculo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='facturarVehiculo.php')?'detalle':''; ?>" href="../paginas/facturarVehiculo.php">Facturar Vehiculo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='listarVehiculos.php')?'detalle':''; ?>" href="../paginas/listarVehiculos.php">Listar Vehiculos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='hacerLogout.php')?'detalle':''; ?>" href="../acciones/hacerLogout.php">Logout</a>
          </li> -->
        <?php  
        }
         else
        {
        ?> 
          <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='registro.php')?'detalle':''; ?>" href="../paginas/registro.php">Registrate</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=='login.php')?'detalle':''; ?>" href="../paginas/login.php">Login</a>
          </li>
        <?php 
        }
        ?>
	    </ul>	    
	  </div>
	</nav>
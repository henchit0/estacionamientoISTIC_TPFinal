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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <title>Listado de Usuarios</title>
  </head>
  <body class="bg-body">
    <header>
      <?php 
        include "../componentes/header.php";
      ?>
    </header>
    <!-- Begin page content -->
    <main role="main" class="container mt-5">
      <?php 
      if (isset($_SESSION['idDeUsuario'])) 
      {
      ?>
      <div class="row justify-content-center">
        <div class="col-sm-8 bg-row pl-5 pr-5 pt-4 pb-5">
          <h1 class="h3 mb-5 text-center font-weight-normal">Listado de usuarios</h1>
          <form action="../acciones/actualizarUsuario.php" method="post" accept-charset="utf-8">
            <table class="table table-hover bg-light" style ="text-align: center;">
              <thead class = "thead-dark">
                <tr>
                  <th scope="col">ID Usuario</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Perfil</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Habilitar / Deshabilitar</th>
                </tr>
              </thead>      
              <?php
                include "../acciones/AccesoDatos.php";

                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("select * from usuario");
                $consulta->execute();     
                $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);

                $contador = 1;
                foreach ($datos as $usuario) 
                {                
                  echo "<tr><th scope='row'>".$usuario['idUsuario']."</th>";
                  echo "<td>".$usuario['user']."</td>";
                  echo "<td>".$usuario['perfil']."</td>";
                  echo "<td>".$usuario['estado']."</td>";                  
                  if ($usuario['estado'] == 'Deshabilitado') 
                  {
                    echo "<td><button type='submit' name='habilitar' value='".$usuario['idUsuario']."' class='btn btn-success'>Habilitar</button></td></tr>";
                  }
                  else
                  {                    
                    echo "<td><button type='submit' name='deshabilitar' value='".$usuario['idUsuario']."' class='btn btn-danger'>Deshabilitar</button></td></tr>";
                  }                   
                  $contador++ ;
                }        
              ?>
            </table>
          </form>  
        </div>    
      </div>
      <?php  
      }
      ?>    	
 	  </main>
    <footer class="footer bg-dark">
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
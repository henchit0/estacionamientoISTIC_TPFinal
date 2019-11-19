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
    <title>Login</title>
  </head>
  <body>
    <header>
      <?php 
        include "../componentes/header.php";
      ?>
    </header>
    <!-- Begin page content -->
    <main role="main" class="container  mt-5"> 
    <div class="container">
  <div class="row justify-content-center">        
    <div class="col-5">
      <form action="../acciones/hacerLogin.php" >
        <div class="form-group">
          <h1 class="h3 mb-3 font-weight-normal">Login</h1>
          <?php  
          if (isset($_GET['error'])) 
          {
            if ($_GET['error'] == "camposvacios") {
              echo '<p>Llena todos los campos!</p>';
            }
            else if ($_GET['error'] == "passwordincorrecto") 
            {
              echo '<p>La contraseña es incorrecta!</p>';
            }
            else if ($_GET['error'] == "usuarioincorrecto") 
            {
              echo '<p>El usuario no existe!</p>';
            }
            else if ($_GET['error'] == "contraseñaincorrecta") 
            {
              echo '<p>Contraseña incorrecta!</p>';
            }
          }
          else if (isset($_SESSION['idDeUsuario']))
          {
            echo '<p>Bienvenido!</p>';
          } else '<p>Llena los campos.</p>';        
          ?>
          <input type="text" class="form-control" name="inputUsuario" aria-describedby="emailHelp" placeholder="Usuario">
          <small id="emailHelp" class="form-text text-muted">Debe tener al menos 6 caracteres.</small>
      </div>
      <div class="form-group">
          <input type="password" class="form-control" name="inputPassword" placeholder="Contraseña">
      </div>        
      <button type="submit" class="btn btn-primary">Log in</button>
    </form>
  </div>    
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
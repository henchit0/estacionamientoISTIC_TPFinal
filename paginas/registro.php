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
    <title>Registro</title>
  </head>
  <body>
    <header>
      <?php  
        include "../componentes/header.php";    
      ?>
    </header><!-- /header -->   
    <!-- Begin page content -->
    <main role="main" class="container  mt-5">
      <div class="row justify-content-center"> 

        <div class="col-5">
          <form action="../acciones/hacerRegistro.php">
            <div class="form-group">
              <h1 class="h3 mb-3 font-weight-normal">Registro</h1>              
              <input type="text" class="form-control" name="inputUsuario" placeholder="Usuario" required autofocus>
            </div>
            <div class="form-group">
              <input type="password" name="inputPassword" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="row">
              <div class="col-4">
                <select name="perfilRegistro" id="inputState" class="form-control">
                  <option selected>Elije...</option>
                  <option value="admin">Administrador</option>
                  <option value="cajero">Cajero</option>
                </select>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <?php 
                if (isset($_GET['exito'])) {
                  echo '<p>Registro ingresado correctamente!</p>';
                }
                else if (isset($_GET['usuariorepetido']))
                {
                  echo '<p>Ya estás registrado!</p>';
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
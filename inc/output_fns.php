<?php
  session_start();

  /*************
  Función para crear la cabecera html
  *************/
  function getCabecera($titulo = ''){
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Lista de tareas - <?php echo $titulo; ?></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
      <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<?php
  }

  /*************
  Función para crear el final del html
  *************/
  function getPie(){
?>
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
  </html>
<?php
  }

  function getFormRegistro(){
?>

    <h2>Crear cuenta</h2>
    <form action="registro.php" method="post">
      <label for="usuario">Usuario:</label>
      <input type="text" name="usuario" class="form-control input-lg">
      <labe for="pass">Contraseña:</label>
      <input type="password" name="pass" class="form-control input-lg">
      <label for="pass2">Confirmar contraseña:</label>
      <input type="password" name="pass2" class="form-control input-lg"><br>
      <input type="submit" class="btn btn-primary btn-lg" value="Crear cuenta">
    </form>

<?php
  }

  function getFormLogin(){
 ?>

     <h2>Iniciar sesión</h2>
     <form name="login" action="login.php" method="post">
       <label for="usuario">Usuario:</label>
       <input type="text" name="usuario" class="form-control input-lg">
       <label for="pass">Contraseña:</label>
       <input type="password" name="pass" class="form-control input-lg"><br>
       <input type="submit" class="btn btn-primary btn-lg" value="Iniciar sesión">
     </form>

 <?php
  }

  function getAlerts(){
    if(isset($_SESSION['msg'])){
      if(isset($_SESSION['tipoMsg'])){
        $tipo = 'alert-' . $_SESSION['tipoMsg'];
      }else{
        $tipo = 'alert-danger';
      }
      echo '<div class="alert alert-dismissible ' . $tipo . '"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $_SESSION['msg'] . '</div>';
      unset($_SESSION['msg']);
      unset($_SESSION['tipoMsg']);
    }
  }

  function getNavBar(){
  ?>

      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Lista de tareas</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
              <li><a href="#"></a></li>

            </ul>

            <?php
              if(identificado()){
            ?>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
            </ul>

            <?php
            }else{
            ?>

            <form class="navbar-form navbar-right" action="login.php" method="post">
              <div class="form-group">
                <input type="text" name="usuario" placeholder="Usuario" class="form-control">
                <input type="password" name="pass" placeholder="Contraseña" class="form-control">
                <input type="submit" class="btn btn-primary" value="Iniciar sesión">
              </div>
            </form>

            <?php
            }
            ?>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

  <?php
  }
  ?>

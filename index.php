<?php
  require 'funciones.php';
  getCabecera('Inicio');
?>

  <div class="container">
    <h1>Lista de tareas</h1>
    <?php
      if(isset($_SESSION['msg'])){
        if(isset($_SESSION['tipoMsg'])){
          $tipo = 'alert-' . $_SESSION['tipoMsg'];
        }else{
          $tipo = 'alert-danger';
        }
        echo '<div class="alert ' . $tipo . '">' . $_SESSION['msg'] . '</div>';
        unset($_SESSION['msg']);
      }
    ?>
    <!--Formulario de login-->
    <div class="col-xs-5 jumbotron">
      <h2>Crear cuenta</h2>
      <form action="registro.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" class="form-control">
        <labe for="pass">Contraseña:</label>
        <input type="password" name="pass" class="form-control">
        <label for="pass2">Confirmar contraseña:</label>
        <input type="password" name="pass2" class="form-control"><br>
        <input type="submit" class="btn btn-primary" value="Crear cuenta">
      </form>
    </div>
    <div class="col-xs-5 col-xs-offset-2 jumbotron">
      <h2>Iniciar sesión</h2>
      <form name="login" action="login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" class="form-control">
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" class="form-control"><br>
        <input type="submit" class="btn btn-primary" value="Iniciar sesión">
      </form>
    </div>
  </div>

<?php
  getPie();
?>

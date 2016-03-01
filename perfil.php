<?php
  require 'bootstrap.php';
  if(!identificado()){
    $_SESSION['msg'] = 'Inicia sesión para acceder a este contenido';
    header('Location: index.php');
    exit();
  }
  getCabecera('Mis tareas');
  getNavBar();
?>

  <div class="container">
    <?php   getAlerts(); ?>
    <form name="nuevaTarea" action="nueva.php" method="post">
      <div class="input-group">
        <input type="text" name="tarea" class="form-control input-lg" placeholder="Escribe una tarea...">
        <span class="input-group-btn">
          <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
        </span>
      </div>
    </form>
  </div>

<?php
  getPie();
?>

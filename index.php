<?php
  require 'bootstrap.php';
  #Comprueba si la sesión está iniciada
  if(identificado()){
    header('Location: perfil.php');
    exit();
  }
  getCabecera('Inicio');
  getNavBar();
?>

  <div class="container">
    <?php   getAlerts(); ?>
    <h1>Lista de tareas</h1>
    <!--Formulario de login-->
    <div class="col-xs-5">
      <?php getFormRegistro(); ?>
    </div>
    <div class="col-xs-5 col-xs-offset-2">
      <h2>Características:</h2>
      <p>&nbsp;</p>
      <ul>
        <li class="lead">Crea y gestiona tus tareas de una forma simple y rápida.</li>
        <li class="lead">Sincroniza tus tareas entre todos tus dispositivos</li>
      </ul>
    </div>
  </div>

<?php
  getPie();
?>

<?php
  require 'bootstrap.php';

  if(identificado()){
    unset($_SESSION['id']);
    $_SESSION['msg'] = 'Sesión cerrada correctamente';
    $_SESSION['tipoMsg'] = 'success';
  }
  header('Location: index.php');
  exit();
?>

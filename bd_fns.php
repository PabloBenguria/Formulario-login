<?php
  function conectar(){
    $conexion = new mysqli('localhost', 'root', '', 'tareas');
    return $conexion;
  }

?>

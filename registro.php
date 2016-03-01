<?php
  require 'bootstrap.php';
  //Verdadero cuando haya algún campo vacio
  if(!comprobarVacios($_POST)){
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    $pass2 = filter_input(INPUT_POST, 'pass2', FILTER_SANITIZE_STRING);

    #Comprobar que las contraseñas coinciden
    if($pass === $pass2){
      #Ciframos la contraseña
      $passCifrada = password_hash($pass, PASSWORD_DEFAULT);

      #Comprobamos si el usuario existe en la tabla usuarios
      $conexion = conectar();
      $resultado = $conexion->query("SELECT id FROM usuario WHERE usuario='$usuario'");
      if($resultado->num_rows != 0){
        $_SESSION['msg'] = 'El usuario ya existe';
        header('Location: index.php');
        exit();
      }

      #Procedemos al registro
      $resultado = $conexion->query("INSERT INTO usuarios VALUES('', '$usuario', '$passCifrada')");

      #Comprobamos si no funcionó el registro
      if(!$resultado){
          $_SESSION['msg'] = 'No se pudo completar el registro';
      }else{
        $_SESSION['msg'] = 'Registro completado';
        $_SESSION['tipoMsg'] = 'success';
      }
    }else{
      #Si las contraseñas no coinciden
      $_SESSION['msg'] = 'Las contraseñas no coinciden';
    }
  }else{
    #Si hay campos vacíos
    $_SESSION['msg'] = 'Hay que cubrir todos los campos';
  }
  header('Location: index.php');
  exit();

?>

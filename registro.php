<?php
  require 'funciones.php';
  //Verdadero cuando haya algún campo vacio
  if(!comprobarVacios($_POST)){
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    $pass2 = filter_input(INPUT_POST, 'pass2', FILTER_SANITIZE_STRING);

    #Comprobar que las contraseñas coinciden
    if($pass === $pass2){
      #Ciframos la contraseña
      $passCifrada = password_hash($pass, PASSWORD_DEFAULT);

      #Procedemos al registro
      $conexion = conectar();
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

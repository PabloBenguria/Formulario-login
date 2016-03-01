<?php
  require 'bootstrap.php';

  if(!comprobarVacios($_POST)){
    #Recogemos los datos y los filtramos
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

    #Conectamos con la base de datos
    $conexion = conectar();
    #Buscar usuario en la tabla usuarios
    $resultado = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");
    #Si no devuelve ningún usuario
    if($resultado->num_rows == 0){
      $_SESSION['msg'] = 'Datos de acceso incorrectos';
    }else{
      $usuario = $resultado->fetch_assoc();

      #Verificamos la validez de los datos introducidos
      if(password_verify($pass, $usuario['password'])){
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['msg'] = 'Sesión iniciada correctamente';
        $_SESSION['tipoMsg'] = 'success';
        header('Location: perfil.php');
        exit();
      }else{
        $_SESSION['msg'] = 'Datos de acceso incorrectos';
      }
    }
  }else{
    $_SESSION['msg'] = 'Hay que cubrir todos los campos';
  }

  header('Location: index.php');
  exit();
?>

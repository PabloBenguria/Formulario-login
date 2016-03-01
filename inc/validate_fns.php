<?php
  function comprobarVacios($campos){
    foreach ($campos as $campo) {
      if(empty($campo)){
        return true;
      }
    }
    return false;
  }

  function identificado(){
    if(isset($_SESSION['id'])){
      return true;
    }else{
      return false;
    }
  }
?>

<?php
  function comprobarVacios($campos){
    foreach ($campos as $campo) {
      if(empty($campo)){
        return true;
      }
    }
    return false;
  }
?>

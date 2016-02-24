<?php
  session_start();

  /*************
  Función para crear la cabecera html
  *************/
  function getCabecera($titulo = ''){
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Lista de tareas - <?php echo $titulo; ?></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    </head>
    <body>
<?php
  }

  /*************
  Función para crear el final del html
  *************/
  function getPie(){
?>
    <script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
  </html>
<?php
  }
?>

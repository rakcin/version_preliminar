<?php
  session_start();
  $rol_cli=[2];

  if(!array_key_exists('rol', $_SESSION) || !in_array ($_SESSION['rol'], $rol_cli)){
    header('location:');
  }
  

?>
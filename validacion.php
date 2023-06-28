<?php
  session_start();
  $rol_admi=[1];

  if(!array_key_exists('rol', $_SESSION) || !in_array ($_SESSION['rol'], $rol_admi)){
    header('location:modulos.php');
  }

?>
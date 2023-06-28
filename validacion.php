<?php
  session_start();
  $rol_admi=[1];

  if(!array_key_exists('idrol', $_SESSION) || !in_array ($_SESSION['idrol'], $rol_admi)){
    header('location:');
  }

?>
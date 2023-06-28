<?php
include_once "conexion.php";

  $username=$_POST['username'];
  $contraseña = $_POST['contraseña'];

$query="SELECT * FROM registro where username = '$username' and contraseña ='$contraseña '";
$result = $conn-> query($query);
$row=$result ->fetch_assoc();



if($result->num_rows>0){
  session_start();

  $_SESSION['username']= $username;
  $_SESSION['rol']=$row['idRol'];
  header('location:modulos.php');

}

 else{
      echo"el usuario o contraseña son incorrectos";

    }


    


?>

<?php

include_once "conexion.php";
$username =$_POST["username"];
$numDoc = $_POST["numDoc"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$numCon = $_POST["numCon"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];
$rol = ["rol"];




$sql="INSERT INTO registro (username,numDoc, nombres, apellidos, numCon, direccion, email, contraseña,rol) VALUES ('$username','$numDoc', '$nombres', '$apellidos', '$numCon','$direccion','$email','$contraseña','2')";

if($conn -> query($sql)){
    echo"registro exitoso";
   include_once "login.php";
}
else{
    echo "error no se ejecuto";
}

?>
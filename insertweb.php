<?php

include_once "conexion.php";

$numDoc = $_POST["numDoc"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$numCon = $_POST["numCon"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];


$sql="INSERT INTO registro (numDoc, nombres, apellidos, numCon, direccion, email, contraseña) VALUES ('$numDoc', '$nombres', '$apellidos', '$numCon','$direccion','$email','$contraseña')";
if($conn -> query($sql)){
    echo"registro exitoso";
    include_once "login.php";
}
else{
    echo "error no se ejecuto";
}

?>
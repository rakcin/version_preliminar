<?php

include_once "conexion.php";

$numDoc = $_POST["numDoc"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$numCon = $_POST["numCon"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];


if($numDoc ==""|| $nombres =="" || $apellidos=="" ||$numCon =="" ||$direccion =="" ||$email =="" ||$contraseña ==""){
    echo "Los campos son obligatorios";
}
else{ 
    $sql= "UPDATE registro SET
    numDoc = '$numDoc',
    nombres = '$nombres',
    apellidos = '$apellidos',
    direccion = '$direccion',
    email = '$email',
    contraseña  = '$contraseña',
    where numDoc = '$numDoc'";
}



if($conn -> query($sql)){
    echo "<a style='margin-left: 460%; width: 50%;' href='rta_inv.php'>Regresar</a>";
    include_once "rta_update.php";
}
else{
    echo "error no se ejecuto";
}
?>
<?php

include_once "conexion.php";


$nombres = $_POST["nombres"];
$contraseña = $_POST["contraseña"];


$sql="SELECT nombres,contraseña from registro";
if($conn -> query($sql)){
    echo"registro exitoso";
    include_once "Modulos.html";
}
else{
    echo "error no se ejecuto";
}

?>
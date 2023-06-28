<?php

include_once "conexion.php";

$rol = $_POST["rol"];

$cargo = $_POST["cargo"];

$sql="INSERT INTO rol (rol, cargo) VALUES ('1', 'admi'),('2','cliente')";

if($conn -> query($sql)){
    echo"registro exitoso";
}
else{
    echo "error no se ejecuto";
}

?>

?>
<?php

include_once "conexion2.php";

$idpro = $_POST["idpro"];
$nombre_pro = $_POST["nombre_pro"];
$descripcion = $_POST["descripcion"];
$cantidad = $_POST["cantidad"];
$color = $_POST["color"];
$medidas = $_POST["medidas"];
$stock = $_POST["stock"];
$estado = $_POST["estado"];
$tipo_material = $_POST["tipo_material"];


$sql="INSERT INTO descripcion (idpro, nombre_pro, descripcion, cantidad, color, medidas, stock, estado, tipo_material) VALUES ('$idpro', '$nombre_pro', '$descripcion', '$cantidad','$color','$medidas','$stock', '$estado', '$tipo_material')";
if($conn -> query($sql)){
    echo"registro exitoso";
    include_once "rtaweb.php";
}
else{
    echo "error no se ejecuto";
}

?>
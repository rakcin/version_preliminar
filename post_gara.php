<?php

include_once "conexion.php";

$id_garantia =$_POST["id_garantia"];
$estado_pro = $_POST["estado_pro"];
$nombre_cli = $_POST["nombre_cli"];
$fecha_entrega = $_POST["fecha_entrega"];
$fecha_compra = $_POST["fecha_compra"];
$descripcion_daño = $_POST["descripcion_daño"];


$sql="INSERT INTO garantias (id_garantia, estado_pro, nombre_cli, fecha_entrega, fecha_compra, descripcion_daño) VALUES ('$id_garantia', '$estado_pro', '$nombre_cli', '$fecha_entrega','$fecha_compra','$descripcion_daño')";
if($conn -> query($sql)){
    echo"registro exitoso";
    include_once "rta_ga.php";
}
else{
    echo "error no se ejecuto";
}

?>
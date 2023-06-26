<?php

include_once "conexion.php";

$id_garantia =$_POST["id_garantia"];
$estado_pro = $_POST["estado_pro"];
$nombre_cli = $_POST["nombre_cli"];
$fecha_entrega = $_POST["fecha_entrega"];
$fecha_compra = $_POST["fecha_compra"];
$descripcion_daño = $_POST["descripcion_daño"];

if($id_garantia=="" || $estado_pro=="" || $nombre_cli=="" || $fecha_entrega=="" || $fecha_compra=="" || $descripcion_daño==""){
    echo "Los campos son obligatorios";
}
else{
    $sql= "UPDATE garantias SET
    id_garantia = '$id_garantia', 
    estado_pro ='$estado_pro',
    nombre_cli ='$nombre_cli',
    fecha_entrega ='$fecha_entrega',
    fecha_compra ='$fecha_compra',
    descripcion_daño ='$descripcion_daño'
    WHERE id_garantia = '$id_garantia'";
}


if($conn -> query($sql)){
    echo "<a style='margin-left: 460%; width: 50%;' href='rta_inv.php'>Regresar</a>";
    include_once "rta_act.php";
}
else{
    echo "error no se ejecuto";
}
?>
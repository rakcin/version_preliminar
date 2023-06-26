<?php

include_once "conexion.php";

$id_venta = $_POST["id_venta"];
$valor_total = $_POST["valor_total"];
$fecha_venta = $_POST["fecha_venta"];
$nom_cliente = $_POST["nom_cliente"];
$num_cotizacion = $_POST["num_cotizacion"];

if($id_venta ==""|| $valor_total==""  || $fecha_venta==""  ||$nom_cliente ==""   || $num_cotizacion=="" ){

echo "los campos son obligatorios";
}
else{
    $sql= "UPDATE ventas SET
    id_venta = '$id_venta', 
    valor_total ='$valor_total',
    fecha_venta ='$fecha_venta',
    nom_cliente ='$nom_cliente',
    num_cotizacion ='$num_cotizacion'
    WHERE id_venta = '$id_venta'";
}

if($conn -> query($sql)){
    
    include_once "rta_acV.php";
}
else{
    echo "error no se ejecuto";
}
?>
<?php

include_once "conexion.php";

$id_venta = $_POST["id_venta"];
$valor_total = $_POST["valor_total"];
$fecha_venta = $_POST["fecha_venta"];
$nom_cliente = $_POST["nom_cliente"];
$num_cotizacion = $_POST["num_cotizacion"];



$sql="INSERT INTO ventas (id_venta, valor_total, fecha_venta,nom_cliente,num_cotizacion) VALUES ('$id_venta', '$valor_total ', '$fecha_venta', '$nom_cliente','$num_cotizacion')";
if($conn -> query($sql)){
    echo"registro exitoso";
    include_once "rtaVenta.php";
}
else{
    echo "error no se ejecuto";
}

?>

<?php

include_once "conexion.php";

$id_venta = $_POST['id_venta'];


if($id_venta==""){
    echo "El id es obligatorio";
}
else{
    $sql= "DELETE FROM ventas WHERE id_venta = '$id_venta'";
}



if($conn -> query($sql)){
    echo "<a style='margin-left: 460%; width: 50%;' href='rta_inv.php'>Regresar</a>";
    include_once "rta_deletev.php";
}
else{
    echo "error no se ejecuto";
}
?>
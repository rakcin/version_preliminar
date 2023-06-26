<?php

include_once "conexion.php";

$idpro = $_POST["idpro"];
$nombre_pro = $_POST["nombre_pro"];
$descripcion = $_POST["descripcion"];
$nombre_prov = $_POST["nombre_prov"];
$cantidad = $_POST["cantidad"];
$ult_fech_ing = $_POST["ult_fech_ing"];
$ult_cant_ing = $_POST["ult_cant_ing"];
$ult_fech_sal = $_POST["ult_fech_sal"];
$ult_cant_sal = $_POST["ult_cant_sal"];


$sql="INSERT INTO inventarios (idpro, nombre_pro, descripcion, nombre_prov,cantidad, ult_fech_ing,ult_cant_ing, ult_fech_sal, ult_cant_sal) VALUES ('$idpro', '$nombre_pro', '$descripcion', '$nombre_prov','$cantidad','$ult_fech_ing','$ult_cant_ing', '$ult_fech_sal', '$ult_cant_sal')";


if($conn -> query($sql)){
    echo"registro exitoso";
    include_once "rta_inv.php";
}
else{
    echo "error no se ejecuto";
}

?>
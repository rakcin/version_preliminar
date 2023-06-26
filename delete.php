<?php

include_once "conexion.php";

$idpro = $_POST['idpro'];


if($idpro==""){
    echo "El id es obligatorio";
}
else{
    $sql= "DELETE FROM inventarios WHERE idpro = '$idpro'";
}



if($conn -> query($sql)){
    echo "<a style='margin-left: 460%; width: 50%;' href='rta_inv.php'>Regresar</a>";
    include_once "rta_delete.php";
}
else{
    echo "error no se ejecuto";
}
?>
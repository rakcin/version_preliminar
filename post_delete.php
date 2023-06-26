<?php

include_once "conexion.php";

$id_garantia = $_POST['id_garantia'];


if($id_garantia==""){
    echo "El id es obligatorio";
}
else{
    $sql= "DELETE FROM garantias WHERE id_garantia = '$id_garantia'";
}



if($conn -> query($sql)){
    
    include_once "delete_rta.php";
}
else{
    echo "error no se ejecuto";
}
?>
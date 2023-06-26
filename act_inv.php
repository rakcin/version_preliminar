<?php

include_once "conexion.php";

$idpro = $_POST['idpro'];
$ult_fech_ing = $_POST['ult_fech_ing'];
$ult_cant_ing = $_POST['ult_cant_ing'];
$ult_fech_sal = $_POST['ult_fech_sal'];
$ult_cant_sal = $_POST['ult_cant_sal'];

if($idpro=="" || $ult_fech_ing=="" || $ult_cant_ing=="" || $ult_fech_sal=="" || $ult_cant_sal==""){
    echo "Los campos son obligatorios";
}
else{
    $sql= "UPDATE inventarios SET
    idpro = '$idpro', 
    ult_fech_ing ='$ult_fech_ing',
    ult_cant_ing ='$ult_cant_ing',
    ult_fech_sal ='$ult_fech_sal',
    ult_cant_sal ='$ult_cant_sal'
    WHERE idpro = '$idpro'";
}



if($conn -> query($sql)){
    echo "<a style='margin-left: 460%; width: 50%;' href='rta_inv.php'>Regresar</a>";
    include_once "rta_update.php";
}
else{
    echo "error no se ejecuto";
}
?>
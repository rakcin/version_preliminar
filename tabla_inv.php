<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senilux2";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
die("Conexión fallida: " . mysqli_connect_error());



}

$sql = "CREATE TABLE inventarios (
    idpro INT(12) PRIMARY KEY,
    nombre_pro VARCHAR(30)NOT NULL,
    descripcion VARCHAR(30)NOT NULL,
    nombre_prov VARCHAR(30)NOT NULL,
    cantidad INT(20) not null,
    ult_fech_ing DATE not null,
    ult_cant_ing INT(20)not null,
    ult_fech_sal DATE not null,
    ult_cant_sal INT(20) not null


)";


    if(mysqli_query($conn, $sql)){
        echo"Tabla inventarios creada";




    }else{

echo"Error creando tabla: " . mysqli_error($conn);

    }
mysqli_close($conn);




?>
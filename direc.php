<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ventas";



$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
die("Conexión fallida: " . mysqli_connect_error());



}

$sql = "CREATE TABLE descripcion (
    idPro INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_pro VARCHAR(30)NOT NULL,
    descripcion VARCHAR(35)NOT NULL,
    cantidad INT (14),
    color VARCHAR (10),
    medidas INT(20),
    stock INT (10),
    estado VARCHAR(12),
    tipo_material VARCHAR (25),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    if(mysqli_query($conn, $sql)){
        echo"Tabla producto creada";

    }else{

echo"Error creando tabla: " . mysqli_error($conn);

    }
mysqli_close($conn);




?>
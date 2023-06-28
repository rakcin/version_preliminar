<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senilux2";



$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
die("Conexión fallida: " . mysqli_connect_error());



}

$sql = "CREATE TABLE rol (
    idRol INT(6) PRIMARY KEY,
    cargo VARCHAR(30)NOT NULL)
    ";
    

    if(mysqli_query($conn,$sql)){
        echo"Tabla rol creada";




    }else{

echo"Error creando tabla: " . mysqli_error($conn);

    }
mysqli_close($conn);




?>
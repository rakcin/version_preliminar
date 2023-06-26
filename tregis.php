<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senilux2";



$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
die("Conexión fallida: " . mysqli_connect_error());



}

$sql = "CREATE TABLE registro (
    numDoc INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(30)NOT NULL,
    apellidos VARCHAR(30)NOT NULL,
    numCon INT (13)NOT NULL,
    direccion VARCHAR (30)NOT NULL,
    email VARCHAR(50)NOT NULL,
    contraseña VARCHAR (50)NOT NULL)";

    if(mysqli_query($conn,$sql)){
        echo"Tabla registro creada";




    }else{

echo"Error creando tabla: " . mysqli_error($conn);

    }
mysqli_close($conn);




?>
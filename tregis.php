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
    username varchar(30) primary key  not null, 
    numDoc INT(11)NOT NULL,
    nombres VARCHAR(30)NOT NULL,
    apellidos VARCHAR(30)NOT NULL,
    numCon INT (13)NOT NULL,
    direccion VARCHAR (30)NOT NULL,
    email VARCHAR(50)NOT NULL,
    contraseña VARCHAR (50)NOT NULL,
    rol int(3)not null)
    ";

    if(mysqli_query($conn,$sql)){
        echo"Tabla registro creada";




    }else{

echo"Error creando tabla: " . mysqli_error($conn);

    }
mysqli_close($conn);




?>
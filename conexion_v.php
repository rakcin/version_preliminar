<?php

$conn = mysqli_connect($servername = "localhost",$username = "root",$password = "",$dbname = "ventas");

if (!$conn){
die("Conexión fallida: " . mysqli_connect_error());



}
else{

echo "conexion exitosa";

}


?>
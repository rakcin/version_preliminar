<?php

$conn = mysqli_connect($servername = "localhost",$username = "root",$password = "");

if (!$conn){
die("Conexión fallida: " . mysqli_connect_error());



}
else{

echo "Conexion exitosa \n";

}

?>
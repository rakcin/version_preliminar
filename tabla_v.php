<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senilux2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE ventas (
id_venta INT (6)PRIMARY KEY,
valor_total INT(10) NOT NULL,
fecha_venta DATE NOT NULL,
nom_cliente VARCHAR(50) NOT NULL,
num_cotizacion int(4))";

if (mysqli_query($conn, $sql)) {
    echo "Tabla venta creada";
    } else {
    echo "Error crear tabla: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
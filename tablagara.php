<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senilux2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE garantias (
id_garantia INT (6)PRIMARY KEY,
estado_pro VARCHAR(20) NOT NULL,
nombre_cli VARCHAR(20) NOT NULL,
fecha_entrega DATE NOT NULL,
fecha_compra DATE NOT NULL,
descripcion_daño VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla garantia creada";
    } else {
    echo "Error crear tabla: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
<?php
$servername = "0.0.0.0";
$username = "root";
$password = "root";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
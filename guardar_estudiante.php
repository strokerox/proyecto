<?php
$servername = "0.0.0.0";
$username = "root";
$password = "root";
$dbname = "estudiantes_db";

$conn = new mysqli($servername, $username, $password, $dbname);
include 'menu.php';
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$identificacion = $_POST['identificacion'];
$carrera = $_POST['carrera'];
$nota = $_POST['nota'];
$telefono = $_POST['telefono'];

// V
if (isset($nombre) && isset($apellido) && isset($identificacion) && isset($carrera) && isset($nota) && isset($telefono)) {
// Imprimir
echo "Datos recibidos:<br>";
echo "Nombre: $nombre<br>";
echo "Apellido: $apellido<br>";
echo "Identificación: $identificacion<br>";
echo "Carrera: $carrera<br>";
echo "Nota: $nota<br>";
echo "Teléfono: $telefono<br>";

$sql = "INSERT INTO estudiantes (nombre, apellido, identificacion, carrera, nota, telefono) VALUES ('$nombre', '$apellido', '$identificacion', '$carrera', '$nota', '$telefono')";

// consulta SQL
echo "Consulta SQL: $sql<br>";

if ($conn->query($sql) === TRUE) {
echo "Nuevo registro creado con éxito";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
echo "Error: No se recibieron todos los datos necesarios.";
}
$conn->close();
?>
<!DOCTYPE html>
<head></head>
<body>
<div id="header">
<ul class="nav">
<li><a href="#">Entradas</a>
<ul>
<li><a href="respaldar.php">Alumnos</a></li>
<li><a href="#">Bienvenido</a></li>
<li><a href="#" onclick="cerrarPrograma()">Salir</a></li>
</ul>
</li>

<li><a href="#">Procesos</a>
<ul>
<li><a href="extraer_datos.php">Extraer Datos</a></li>
<li><a href="guardar_estudiante.php">Guardar Estudiante</a></li>
</ul>
</li>
</ul>
</div>

<script type="text/javascript">
function cerrarPrograma() {
if (confirm("¿Está seguro de que desea salir?")) {
window.close();
}
}
</script>

<style type="text/css">
* {
margin: 0px;
padding: 0px;
}

#header {
margin: auto;
width: 900px;
font-family: Arial, Helvetica, sans-serif;
}

ul, ol {
list-style: none;
}

.nav > li {
float: left;
}

.nav li a {
background-color: #000;
color: #fff;
text-decoration: none;
padding: 10px 12px;
display: block;
}

.nav li a:hover {
background-color: #434343;
}

.nav li ul {
display: none;
position: absolute;
min-width: 140px;
}

.nav li:hover > ul {
display: block;
}

.nav li ul li {
position: relative;
}

.nav li ul li ul {
right: -140px;
top: 0px;
}

form {
margin-top: 50px;
}
</style>
</body>
</html>
<?php
// Datos de conexión
$servername = "0.0.0.0";
$username = "root";
$password = "root";
$dbname = "estudiantes_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos de la tabla
$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);

echo "<h1>Lista de Estudiantes</h1>";
if ($result->num_rows > 0) {
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Identificación</th>
<th>Carrera</th>
<th>Nota</th>
<th>Teléfono</th>
</tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>
<td>{$row['id']}</td>
<td>{$row['nombre']}</td>
<td>{$row['apellido']}</td>
<td>{$row['identificacion']}</td>
<td>{$row['carrera']}</td>
<td>{$row['nota']}</td>
<td>{$row['telefono']}</td>
</tr>";
}
echo "</table>";
} else {
echo "No se encontraron registros.";
}

$conn->close();
?>
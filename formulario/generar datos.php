
<h2>Generar Boletines de Calificación</h2>

<?php
// Conexión a la base de datos 
function conectar_mysql(){
    error_reporting(0);
    $servername = "localhost";
    $username =  "root";
    $password =  "";
    $dbname = "alumnos";
    $conexion=mysqli_connect($servername,$username,$password,$dbname);
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verificar la conexión
    if ($conn->connect_error) {
      die("Error de conexión: " . $conn->connect_error);
        }
    }

// Obtener datos de los alumnos de la base de datos
$sql = "SELECT * FROM alumnos";
$resultados = ($sql);

// Nombre del archivo de texto para guardar los boletines
$archivo = "boletines.txt";

// Abrir el archivo en modo escritura
$fp = fopen($archivo, "w");

if ($resultados->num_rows > 0) {
  // Iterar sobre los resultados y escribir en el archivo
  while($row = $resultados->fetch_assoc()) {
    $texto = <<<EOT
    
  
----------------------------------------
datos del estudiantes
carrera: {$row["carrera"]}
----------------------------------------

Nombre: {$row["nombre"]} 
Cédula: {$row["cedula"]}
dirección: {$row["dirección"]}
telefono: {$row["telefono"]}

----------------------------------------
Nota Final: {$row["nota_final"]}
Estado: {$row["estado"]}
----------------------------------------

EOT;

    fwrite($fp, $texto);
  }
  fclose($fp);
  echo "Boletines de calificación generados correctamente en el archivo '$archivo'";
} else {
  echo "No se encontraron alumnos en la base de datos.";
}


?>
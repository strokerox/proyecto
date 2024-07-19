
    <?php

include "con_sql.php";


// Insertar datos del formulario a la base de datos
  
      $nombre = $_POST["nombre"];
      $cedula = $_POST["cedula"];
      $dirección = $_POST["dirección"];
      $carrera = $_POST["carrera"];
      $telefono = $_POST["telefono"];
      $nota_final = $_POST["nota_final"];

      $sql = "INSERT INTO datos_de_los_alumnos (nombre, cedula, dirección, carrera, telefono, nota_final)
      VALUES ('$nombre', '$cedula', '$dirección', '$carrera', '$telefono')";
      $resultados = mysqli_query($sql);

        if ($conn->query($sql) === TRUE) {
          echo "Nuevo alumno agregado correctamente";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        return $conex
  


?>
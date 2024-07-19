<form action="enviar_formulario.php" method="post">
    <fieldset>
      <legend>ingrese los datos del alumno</legend>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required><br>
  
      <label for="cedula">cedula:</label>
      <input type="text" id="cedula" name="cedula" required><br>

      <label for="dirección">dirección:</label>
      <input type="text" id="dirección" name="dirección" required><br>

      <label for="carrera">carrera:</label>
      <input type="text" id="carrera" name="carrera" required><br>
  
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required><br>

      <label for="nota_final">nota_final:</label>
      <input type="deci" id="nota_final" name="nota_final" required><br>

      


      <input type="submit" name="enviar">
    </fieldset>
<?php
$conexion = new mysqli("localhost", "root", "", "asistencia_db");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$resultado = $conexion->query("SELECT * FROM asistencias ORDER BY fecha DESC, hora DESC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tabla de Asistencias</title>
</head>
<body>
  <h1>Tabla de Asistencias</h1>
  <table border="1">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Matrícula</th>
        <th>Clase</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Asistencia</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $resultado->fetch_assoc()): ?>
        <tr>
          <td><?= $row['nombre'] ?></td>
          <td><?= $row['apellidos'] ?></td>
          <td><?= $row['matricula'] ?></td>
          <td><?= $row['clase'] ?></td>
          <td><?= $row['fecha'] ?></td>
          <td><?= $row['hora'] ?></td>
          <td><?= $row['asistencia'] ?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>
<?php $conexion->close(); ?>

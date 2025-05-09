<?php
$conexion = new mysqli("localhost", "root", "", "asistencia_db");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$matricula = $_POST['matricula'];
date_default_timezone_set('America/Mexico_City');
$fecha = date("Y-m-d");
$hora = date("H:i:s");

$clases = [
    ["07:00:00", "07:50:00", "Clase 1"],
    ["07:51:00", "08:40:00", "Clase 2"],
    ["08:41:00", "09:30:00", "Clase 3"],
    ["09:31:00", "10:20:00", "Clase 4"],
    ["10:21:00", "11:10:00", "Clase 5"]
];

$asistencia = "Falta";
$clase_actual = "Sin clase";

foreach ($clases as $clase) {
    if ($hora >= $clase[0] && $hora <= $clase[1]) {
        $clase_actual = $clase[2];
        $inicio_clase = strtotime($clase[0]);
        $hora_actual = strtotime($hora);
        $asistencia = ($hora_actual - $inicio_clase <= 600) ? "Asistencia" : "Retardo"; // 10 minutos de tolerancia
        break;
    }
}

$sql = "SELECT * FROM alumnos WHERE matricula = '$matricula'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $alumno = $result->fetch_assoc();
    $insert = "INSERT INTO asistencias (nombre, apellidos, matricula, clase, fecha, hora, asistencia)
               VALUES ('{$alumno['nombre']}', '{$alumno['apellidos']}', '$matricula', '$clase_actual', '$fecha', '$hora', '$asistencia')";
    $conexion->query($insert);
    echo "Asistencia registrada: $asistencia en $clase_actual";
} else {
    echo "Alumno no encontrado";
}
$conexion->close();
?>

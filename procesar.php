<?php
// procesar-qr.php

// Función para determinar el estado de asistencia según la hora actual
function determinarEstadoAsistencia($horaActual) {
    // Convertir a objeto DateTime para comparaciones
    $horaInicioAsistio = new DateTime('13:45');
    $horaFinAsistio = new DateTime('14:00');
    $horaInicioRetardo = new DateTime('14:00');
    $horaFinRetardo = new DateTime('15:00');
    $horaInicioFalto = new DateTime('15:05');
    $horaFinFalto = new DateTime('20:00');

    // Comparar la hora actual con los rangos definidos
    if ($horaActual >= $horaInicioAsistio && $horaActual < $horaFinAsistio) {
        return 1; // Asistió
    } elseif ($horaActual >= $horaInicioRetardo && $horaActual < $horaFinRetardo) {
        return 2; // Retardo
    } elseif ($horaActual >= $horaInicioFalto && $horaActual <= $horaFinFalto) {
        return 3; // Faltó
    } else {
        return 3; // Por defecto, considerar como falta si no coincide con ninguno de los rangos anteriores
    }
}

// Verificar que se haya enviado el código QR mediante una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del QR escaneado
    $data = json_decode(file_get_contents("php://input"), true);

    // Validar y obtener la matrícula del formato especificado (ejemplo: 221870467-8)
    $matricula = isset($data['data']) ? $data['data'] : '';
    if (!preg_match('/^\d{9}-\d$/', $matricula)) {
        echo "Formato de matrícula no válido.";
        exit;
    }

    // Determinar la fecha actual y la hora actual
    $fechaActual = date('Y-m-d');
    $horaActual = new DateTime('now', new DateTimeZone('America/Mexico_City'));

    // Determinar el estado de asistencia
    $estadoAsistencia = determinarEstadoAsistencia($horaActual);

    // Conectar a la base de datos
    $conexion = new mysqli("localhost", "root", "", "asistencia");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }

    // Preparar la consulta SQL para insertar o actualizar la asistencia
    $sql = "INSERT INTO asistencia (matricula, fecha, estado_asistencia) VALUES (?, ?, ?)
            ON DUPLICATE KEY UPDATE estado_asistencia = VALUES(estado_asistencia)";

    // Preparar la declaración preparada
    if ($stmt = $conexion->prepare($sql)) {
        // Vincular los parámetros a la declaración preparada como strings
        $stmt->bind_param("ssi", $matricula, $fechaActual, $estadoAsistencia);

        // Ejecutar la declaración preparada
        if ($stmt->execute()) {
            echo "Asistencia registrada con éxito.";
        } else {
            echo "Error al registrar asistencia: " . $stmt->error;
        }

        // Cerrar la declaración preparada
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "Método de solicitud no válido.";
}
?>

<?php
session_start(); // Iniciar la sesión al principio del script

// Datos de conexión a la base de datos
$servername = "localhost"; // Reemplaza con tu servidor
$username = "root"; // Reemplaza con tu usuario
$password = ""; // Reemplaza con tu contraseña
$dbname = "cuentas_administrador"; // Reemplaza con el nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}

// Recoger los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $matricula = $_POST['matricula'];
    $correo = $_POST['correo'];

    // Preparar la consulta para evitar inyecciones SQL
    $stmt = $conexion->prepare("INSERT INTO CUENTAS_ADMIN (NOMBRE, APELLIDO_PATERNO, APELLIDO_MATERNO, MATRICULA, CORREO) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $apellido_paterno, $apellido_materno, $matricula, $correo);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Registro exitoso";
        // Guardar el correo en la sesión
        $_SESSION['correo'] = $correo;
        // Redirige a la página de inicio de sesión o a la página principal
        header("Location: estacion.php");
        exit(); // Asegúrate de llamar a exit después de header para detener la ejecución del script
    } else {
        echo "Error al registrar";
    }
    $stmt->close();
}
$conexion->close();
?>

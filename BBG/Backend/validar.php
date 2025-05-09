<?php
session_start(); // Iniciar la sesión al principio del script

// Datos de conexión a la base de datos
$servername = "localhost"; // Por ejemplo: 'localhost'
$username = "root"; // Tu nombre de usuario de la base de datos
$password = ""; // Tu contraseña de la base de datos
$dbname = "cuentas_administrador"; // El nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}

// Validación de los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $matricula = $_POST['matricula'];

    // Preparar la consulta para evitar inyecciones SQL
    $stmt = $conexion->prepare("SELECT * FROM CUENTAS_ADMIN WHERE CORREO = ? AND MATRICULA = ?");
    $stmt->bind_param("ss", $correo, $matricula);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // Guardar el correo en la sesión
        $_SESSION['correo'] = $correo;

        // Redirige a otra página si los datos son correctos
        header("Location: menu.html");
        exit(); // Asegúrate de llamar a exit después de header para detener la ejecución del script
    } else {
        // Verificar si el correo existe
        $stmt = $conexion->prepare("SELECT * FROM CUENTAS_ADMIN WHERE CORREO = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            // El correo existe pero la matrícula no coincide
            echo "Datos no coinciden";
        } else {
            // El correo no existe en la base de datos
            echo "Cuenta no encontrada";
            // Redirige a la página de registro
            header("Location: registro.php");
            exit(); // Asegúrate de llamar a exit después de header
        }
    }
    $stmt->close();
}
$conexion->close();

?>

<?php
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

// Recoger la matrícula y el nuevo correo electrónico del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];
    $nuevo_correo = $_POST['nuevo_correo'];

    // Preparar la consulta para evitar inyecciones SQL
    $stmt = $conexion->prepare("SELECT * FROM CUENTAS_ADMIN WHERE MATRICULA = ?");
    $stmt->bind_param("s", $matricula);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // La matrícula está registrada, proceder a actualizar el correo electrónico
        $stmt = $conexion->prepare("UPDATE CUENTAS_ADMIN SET CORREO = ? WHERE MATRICULA = ?");
        $stmt->bind_param("ss", $nuevo_correo, $matricula);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "El correo electrónico ha sido actualizado exitosamente.";
        } else {
            echo "Error al actualizar el correo electrónico.";
            // Redirige a la página de inicio de sesion
            header("Location: inicio.php");
        }
    } else {
        echo "La cuenta con esa matrícula no existe.";
    }
    $stmt->close();
}
$conexion->close();
?>
<?php
// Iniciar la sesión PHP
session_start();

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cuentas_usuarios";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("La conexión falló: " . $conn->connect_error);
}

// Suponiendo que el correo electrónico del usuario se almacena en una variable de sesión al iniciar sesión
// Aquí deberías tener el código que valida el inicio de sesión y establece la variable de sesión con el correo
// Por ejemplo:
// $_SESSION['correo'] = 'correo_del_usuario';

// Usar el correo electrónico de la sesión para obtener los datos del usuario
$email = $_SESSION['correo'] ?? 'correo@ejemplo.com';

// Consulta SQL para obtener los datos del usuario
$sql = "SELECT nombre, apellido_paterno, apellido_materno, correo, matricula FROM cuentas WHERE correo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  // Obtener los datos del usuario
  $row = $result->fetch_assoc();
  $nombre = $row['nombre'];
  $apellido_paterno = $row['apellido_paterno'];
  $apellido_materno = $row['apellido_materno'];
  $correo = $row['correo'];
  $matricula = $row['matricula'];
} else {
  // Si no hay resultados, asignar un valor por defecto o manejar el error
  $nombre = "No disponible";
  $apellido_paterno = "No disponible";
  $apellido_materno = "No disponible";
  $correo = "No disponible";
  $matricula = "No disponible";
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Admin_Inicio</title>
  <link rel="icon" href="\administracion.png">

  <style>
    .video-fondo {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%; /* Ancho del viewport */
        height: 100%; /* Altura del viewport */
        overflow: hidden; /* Ocultar barras de desplazamiento si el video es más grande que el viewport */
        z-index: -1; /* Colocar el video detrás del contenido */
      }
  
      /* Estilos para el encabezado del admin */
      .admin-header {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 1.5em; /* hace el texto mas grande */
      }
      
      /* Estilos para el icono del admin */
      #admin-icon {
        width: 100px; /* Ajusta el tamaño de la imagen según lo necesites */
        height: 100px;
      }
  
      /* Estilos para la barra de navegación */
      .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 5px;
        background-color: rgba(149, 186, 231, 0.377); /* Hacer la barra de navegación semi-transparente */
      }
      
      /* Estilos para el menú */
      .menu {
        display: flex;
        gap: 10px;
      }
      
      .menu a {
        text-decoration: none;
        color: #f0e9e9;
        font-size: 2em; /* Hacer el texto más grande */
        transition: all 0.3s ease; /* Agregar transición para suavizar el cambio de estilo */
      }
  
      /* Estilos para el efecto de iluminación al seleccionar un apartado */
      .menu a:hover {
        color: black;
      border-bottom: 2px solid #000; /* Agregar una línea debajo del texto al pasar el mouse */
    }

   /* Agregar estilos para la tabla y el texto */
   table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      color: white; /* Cambiar el color del texto a blanco */
      background-color: ;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>
<div class="video-fondo">
    <video autoplay muted loop id="miVideo">
      <source src="\videoplayback (2).mp4" type="video/mp4">
      Tu navegador no soporta videos HTML5.
    </video>
</div>

<div class="navbar">
  <div class="admin-header">
    <img src="\administracion.png" alt="Icono de Admin" id="admin-icon">
    <h1>ADMIN BBG</h1>
  </div>
  <div class="menu">
    <a href="estacion.php">Inicio</a>
    <a href="perfil.php">Perfil</a>
    <a href="grupo.php">Grupos</a>
    <a href="fecha.php">Horario</a>
  </div>
</div>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escuela";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Realizar consulta SQL
$sql = "SELECT id, nombre, apellido_paterno, apellido_materno, matricula FROM alumnos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Matricula</th></tr>";
  // Mostrar los datos de cada fila
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["apellido_paterno"]. "</td><td>" . $row["apellido_materno"]. "</td><td>" . $row["matricula"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>
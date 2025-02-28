<?php
// Iniciar la sesión PHP
session_start();

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cuentas_administrador";

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
$sql = "SELECT nombre, apellido_paterno, apellido_materno, correo, matricula FROM cuentas_admin WHERE correo = ?";
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

    /* Estilos para el perfil del usuario */
    .perfil-usuario {
      position: absolute;
      top: 50%; /* centrado vertical */
      left: 50%; /* centrado horizontal */
      transform: translate(-50%, -50%); /* Ajuste fino para centrar exactamente */
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 400px; /* Ajusta el ancho como prefieras */
      height: auto; /* Altura automática basada en el contenido */
      padding: 40px; /* Aumentar el padding */
      margin: 20px;
      background-color:rgba(149, 186, 231, 0.377); /* Color de fondo del perfil */
      border-radius: 10px; /* Bordes redondeados */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
    }

    .foto-perfil {
      width: 100px; /* Ajusta el tamaño de la imagen */
      height: 100px;
      border-radius: 50%; /* Hacer la imagen redonda */
      margin-bottom: 20px;
    }

    .info-usuario {
      text-align: center;
    }

    .info-usuario p {
      margin: 5px 0; /* Espaciado vertical entre elementos */
    }

    .logout-form {
      margin-top: 20px;
    }

    .logout-form button {
      padding: 10px 20px;
      font-size: 1em;
      color: #ffffff;
      background-color: #000000;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .logout-form button:hover {
      background-color: #333333;
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
    <a href="perfil.html">Perfil</a>
    <a href="grupo.php">Grupos</a>
    <a href="fecha.php">Horario</a>
  </div>
</div>
 
<div class="perfil-usuario">
    <!-- Asegúrate de cambiar la ruta a la foto de perfil -->
    <img src="\administracion.png" alt="Foto de perfil" class="foto-perfil">
    <div class="info-usuario">
      <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
      <p><strong>Apellido Paterno:</strong> <?php echo $apellido_paterno; ?></p>
      <p><strong>Apellido Materno:</strong> <?php echo $apellido_materno; ?></p>
      <p><strong>Correo:</strong> <?php echo $correo; ?></p>
      <p><strong>Matrícula:</strong> <?php echo $matricula; ?></p>
    </div>
    <div class="logout-form">
      <form action="cerses.php" method="post">
        <button type="submit">Cerrar Sesión</button>
      </form>
    </div>
  </div>

</body>
</html>
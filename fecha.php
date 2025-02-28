<!DOCTYPE html>
<head>
  <title>Admin_Inicio</title>
  <link rel="icon" href="/administracion.png">
</head>

<div class="video-fondo">
    <video autoplay muted loop id="miVideo">
      <source src="\her.mp4">
      Tu navegador no soporta videos HTML5.
    </video>
</div>

  <style>

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
</style>

<body>
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
$dbname = "alumnos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Realizar consulta SQL
$sql = "SELECT Nombre_del_Modulo, Clave, Lunes, Martes, Miercoles, Jueves, Viernes, Docente FROM Horario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1'><tr><th>Nombre del Módulo</th><th>Clave</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Docente</th></tr>";
  // Mostrar los datos de cada fila
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Nombre_del_Modulo"]. "</td><td>" . $row["Clave"]. "</td><td>" . $row["Lunes"]. "</td><td>" . $row["Martes"]. "</td><td>" . $row["Miercoles"]. "</td><td>" . $row["Jueves"]. "</td><td>" . $row["Viernes"]. "</td><td>" . $row["Docente"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<script>
    // Ajustar el tamaño del video al cargar la página
  window.addEventListener('load', function() {
    var video = document.getElementById('miVideo');
    function ajustarVideo() {
      var alturaVentana = window.innerHeight;
      var anchoVentana = window.innerWidth;
      var ratioVideo = video.videoWidth / video.videoHeight;
      var ratioVentana = anchoVentana / alturaVentana;

      if (ratioVentana > ratioVideo) {
        video.style.width = '100%';
        video.style.height = 'auto';
      } else {
        video.style.width = 'auto';
        video.style.height = '100%';
      }
    }
    // Ajustar el video al cambiar el tamaño de la ventana
    window.addEventListener('resize', ajustarVideo);
    ajustarVideo(); // Llamar a la función al cargar la página
  });
</script>

</html>
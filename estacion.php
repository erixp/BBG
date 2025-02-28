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

<table>
    <thead>
        <tr>
            <th>Matrícula</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Fecha</th>
            <th>Asistencia</th>
        </tr>
    </thead>
    <tbody>
         <!-- Alumno 1  -->
        <tr>
            <td>12345</td>
            <td>Axel</td>
            <td>coria</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 2  -->
        <tr>
            <td>67890</td>
            <td>Diego</td>
            <td>Zambrano</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 3  -->
        <tr>
            <td>54321</td>
            <td>Abraham</td>
            <td>Jiménez</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 4  -->
         <tr>
            <td>321988</td>
            <td>erik</td>
            <td>Mijangos</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 5  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 6  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 7  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 8  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 9  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 10  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 11 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 12 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 13  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 14  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 15 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 16 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 17 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 18 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 19 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 20 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 21 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 22  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 23  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 24 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 25 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 26 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 27 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 28 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 29 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 30  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 31  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 32  -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        <!-- Alumno 33 -->
        <tr>
            <td>787721</td>
            <td>omali</td>
            <td>jamil</td>
            <td>lunes 29 de abril del 2024</td>
            <td class="attendance-cell" onclick="toggleAttendance(this)">-</td>
        </tr>
        
    </tbody>
</table>

  

<script>
    function toggleAttendance(cell) {
        if (cell.textContent === '-') {
            cell.textContent = '✓'; // Cambia a palomita si estaba vacío
            cell.style.color = 'green'; // Cambia el color del texto a verde
        } else if (cell.textContent === '✓') {
            cell.textContent = '✗'; // Cambia a tache si era palomita
            cell.style.color = 'red'; // Cambia el color del texto a rojo
        } else if (cell.textContent === '✗') {
            cell.textContent = '∆'; // Cambia a tache si era palomita
           cell.style.color = 'orange'; // Cambia el color del texto a rojo
        }  else {
            cell.textContent = '-'; // Cambia a vacío si era tache
            cell.style.color = ''; // Restaura el color del texto
        }
    }
</script>

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
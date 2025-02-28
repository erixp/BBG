<!DOCTYPE html>
<head>
  <title>Administracion</title>
  <link rel="icon" href="\logo.jpg">
  <!-- Cambia esto por la ruta a tu icono -->
</head>

<div class="video-fondo">
        <video autoplay muted loop id="Video">
            <source src="\mundom.mp4" type="video/mp4">
            <source src="\be.mp4" type="video/mp4"> <!-- Agrega otro formato de video aquí -->
            <!-- Puedes agregar más formatos de video para mayor compatibilidad -->
            Tu navegador no soporta videos HTML5.
        </video>
    </div>

<div class="login-container">
    <br><br><br><br><br>
    <div class="admin-header">
      <img src="\administracion.png" alt="Icono de Admin" id="admin-icon">
       <!-- Añade aquí la ruta a tu imagen -->
     <h1>ADMIN BBG</h1>
    </div>
     <br><br><br>
    <h2>Iniciar sesión</h2>
    <form action="validar.php" method="post">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required>
        
        <button class="btn-91" type="submit">
          <span>Iniciar</span>
        </button>
    </form>
    
    <a href="correo.php" class="forgot-password">¿Cambiastes de correo?</a> <!-- Enlace de ayuda -->
</div>

<!-- Aquí iría el resto de tu código CSS y JavaScript -->
</body>

<style>
/* Establecer el estilo del contenedor del video */


/* Estilo para que el video ocupe toda la pantalla */
.video-fondo {
   position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
overflow: hidden;
}

/* Asegurarse de que el contenido se muestre por encima del video */
.contenido {
  position: relative;
  z-index: 2; /* Aumentar el z-index para asegurar que el contenido esté por encima del video */
}

.video-fondo video {
width: 100%;
height: 100%;
object-fit: cover;
}


/* Estilos generales */
body {
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  margin: 0;
  padding: 0;
  background-size: cover;
  background-position: relative;
  height: 100vh;
  display: flex;
  justify-content: flex-start; /* Cambio a "flex-start" para alinear a la izquierda */
  align-items: center;
}

.login-container {
  background-color: rgba(228, 196, 196, 0.334);
  padding: 30px;
  border-radius: 20px;
  box-shadow: 0 0 20px rgb(2, 2, 2);
  width: 400px;
  text-align: center;
  position: relative;
  animation: changeShadowPosition 4s infinite alternate;
}

 /* Animación de cambio de posición de la sombra */
 @keyframes changeShadowPosition {
      0% {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Posición inicial */
      }
      25% {
        box-shadow: 20px 0 20px rgba(0, 0, 0, 0.3); /* Posición derecha */
      }
      50% {
        box-shadow: 0 20px 20px rgba(0, 0, 0, 0.3); /* Posición abajo */
      }
      75% {
        box-shadow: -20px 0 20px rgba(0, 0, 0, 0.3); /* Posición izquierda */
      }
      100% {
        box-shadow: 0 -20px 20px rgba(0, 0, 0, 0.3); /* Posición arriba */
      }
    }

    input[type="text"],
    input[type="email"] {
      background-color: transparent;
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 4px;
      box-sizing: border-box;
      animation: changeColorAndShadow 4s infinite alternate; /* Aplicar la animación */
    }

    /* Animación de cambio de color y sombra */
    @keyframes changeColorAndShadow {
      0% {
        border-color: #ff8800; /* Color inicial */
        box-shadow: 0 0 10px #ff8800; /* Sombra inicial */
      }
      20% {
        border-color: #002dff;
        box-shadow: 0 0 10px #002dff;
      }
      40% {
        border-color: #8f00ff;
        box-shadow: 0 0 10px #8f00ff;
      }
      60% {
        border-color: #ff0a00;
        box-shadow: 0 0 10px #ff0a00;
      }
      80% {
        border-color: #fff100;
        box-shadow: 0 0 10px #fff100;
      }
      100% {
        border-color: #00ffea;
        box-shadow: 0 0 10px #00ffea;
      }
    }

.btn-91,
.btn-91 *,
.btn-91 :after,
.btn-91 :before,
.btn-91:after,
.btn-91:before {
  border: 0 solid;
  box-sizing: border-box;
}
.btn-91 {
  -webkit-tap-highlight-color: transparent;
  -webkit-appearance: button;
  background-color: #000;
  background-image: none;
  color: #fff;
  cursor: pointer;
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
    Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
    Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
  font-size: 100%;
  font-weight: 900;
  line-height: 1.5;
  margin: 0;
  -webkit-mask-image: -webkit-radial-gradient(#000, #fff);
  padding: 0;
}
.btn-91:disabled {
  cursor: default;
}
.btn-91:-moz-focusring {
  outline: auto;
}
.btn-91 svg {
  display: block;
  vertical-align: middle;
}
.btn-91 [hidden] {
  display: none;
}
.btn-91 {
  background: none;
  border: 2px solid;
  border-radius: 999px;
  box-sizing: border-box;
  display: block;
  padding: 1.2rem 3rem;
  position: relative;
  text-transform: uppercase;
}
.btn-91 span {
  font-weight: 900;
}
.btn-91:after,
.btn-91:before {
  border: 2px solid red;
  border-radius: 999px;
  content: "";
  inset: -2px;
  position: absolute;
  z-index: -1;
}
.btn-91:after {
  border-color: rgb(11, 11, 11);
}
.btn-91:hover:before {
  -webkit-animation: glitch-border 0.2s infinite;
  animation: glitch-border 0.2s infinite;
}
.btn-91:hover:after {
  animation: glitch-border 0.2s infinite reverse;
}
.btn-91:hover span {
  -webkit-animation: glitch-text 0.2s infinite;
  animation: glitch-text 0.2s infinite;
}
@-webkit-keyframes glitch-text {
  0% {
    text-shadow: 0 0 0 red, 0 0 0 blue;
  }
  to {
    text-shadow: -2px 1px 0 red, 2px -1px 0 blue;
  }
}
@keyframes glitch-text {
  0% {
    text-shadow: 0 0 0 red, 0 0 0 blue;
  }
  to {
    text-shadow: -2px 1px 0 red, 2px -1px 0 blue;
  }
}
@-webkit-keyframes glitch-border {
  0% {
    transform: translate(2px, -1px);
  }
  to {
    transform: translate(-2px, -1px);
  }
}
@keyframes glitch-border {
  0% {
    transform: translate(2px, -1px);
  }
  to {
    transform: translate(-2px, -1px);
  }
}

.forgot-password {
      position: absolute;
      bottom: 10px;
      right: 10px;
      font-size: 20px; /* Cambia esto por el tamaño que quieras para tu texto */
      color: #0a0a0a; /* Color del enlace */
      text-decoration: none; /* Sin subrayado */
    }

body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

/* Estilos para el encabezado del admin */
.admin-header {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

/* Estilos para el icono del admin */
#admin-icon {
  width: 80px; /* Ajusta el tamaño de la imagen según lo necesites */
  height: 80px;
}
</style>

<script>
        /* Ajustar el tamaño del video al cargar la página */
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

            // Llamar a la función para ajustar el video
            ajustarVideo();

            // Función para generar un código aleatorio de 6 dígitos
            function generarCodigo() {
                return Math.floor(100000 + Math.random() * 900000);
            }

            // Asignar el código aleatorio al elemento con id 'codigo-aleatorio'
            document.getElementById('codigo-aleatorio').textContent = generarCodigo();
        });
    </script>

</html>


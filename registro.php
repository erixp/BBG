<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de Usuario</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: url('/des.webp') no-repeat center center fixed; /* Cambia 'ruta/a/tu/imagen.jpg' por la ruta de tu imagen */
      background-size: cover;
      animation: body-animation 10s infinite alternate;
    }

    @keyframes body-animation {
      0% { filter: brightness(1); }
      50% { filter: brightness(0.8); }
      100% { filter: brightness(1); }
    }

    .container {
      text-align: center;
      background: rgba(0, 0, 0, 0.5); /* Negro con opacidad del 50% */
      border-radius: 15px;
      padding: 20px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.8);
      animation: shadow-pulse 2s infinite alternate;
    }

    @keyframes shadow-pulse {
      0% { box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.8); }
      100% { box-shadow: 0 0 50px 50px rgba(0, 0, 0, 0.8); }
    }

    h2 {
      margin-bottom: 20px;
      color: #fff;
      text-shadow: none;
    }

    form {
      background: rgba(255, 255, 255, 0);
      border-radius: 15px;
      padding: 20px;
      margin-top: 20px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    label, input {
      display: block;
      width: 100%;
      color: #fff;
    }

    label {
      text-align: left;
      margin-bottom: 5px;
    }

    input {
      background: rgba(255, 255, 255, 0.7); 
      border: 2px solid #000; /* Borde negro por defecto */
      border-radius: 5px;
      padding: 10px;
      transition: border-color 0.3s, background-color 0.3s, box-shadow 0.3s;
    }

    input:focus {
      border-color: #00ffff; /* Borde cian al enfocar */
      background-color: rgba(0, 255, 255, 0.1); /* Fondo cian claro al enfocar */
      box-shadow: 0 0 10px rgba(0, 255, 255, 0.5); /* Brillo cian al enfocar */
    }

    input:valid {
      border-color: #00ffff; /* Borde cian si el input es válido */
      background-color: rgba(0, 255, 255, 0.1); /* Fondo cian claro si es válido */
      box-shadow: 0 0 10px rgba(0, 255, 255, 0.5); /* Brillo cian si es válido */
    }

    input:invalid {
      border-color: #ff0000; /* Borde rojo si el input es inválido */
      background-color: rgba(255, 0, 0, 0.1); /* Fondo rojo claro si es inválido */
      box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Brillo rojo si es inválido */
    }

    .btn-68 {
      background: none;
      color: #fff;
      font-weight: 900;
      padding: 0.8rem 2rem;
      border: 2px solid #fff;
      border-radius: 15px;
      position: relative;
      overflow: hidden;
      cursor: pointer;
      transition: color 0.4s, background-color 0.4s;
      grid-column: span 2;
      justify-self: center;
    }

    .btn-68::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 300%;
      height: 300%;
      background: rgba(255, 255, 255, 0.1);
      transition: width 0.4s, height 0.4s, top 0.4s, left 0.4s;
      border-radius: 50%;
      z-index: 0;
      transform: translate(-50%, -50%);
    }

    .btn-68:hover::before {
      width: 0;
      height: 0;
      top: 50%;
      left: 50%;
    }

    .btn-68:hover {
      color: #000;
      background-color: #fff;
    }

    .btn-68 span {
      position: relative;
      z-index: 1;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Formulario de Registro</h2>
    <form action="valida_registro.php" method="post">
      <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>
      <div>
        <label for="apellido_paterno">Apellido Paterno:</label>
        <input type="text" id="apellido_paterno" name="apellido_paterno" required>
      </div>
      <div>
        <label for="apellido_materno">Apellido Materno:</label>
        <input type="text" id="apellido_materno" name="apellido_materno" required>
      </div>
      <div>
        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required>
      </div>
      <div>
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>
      </div>
      <button class="btn-68"><span>Registrar</span></button>
    </form>
  </div>
</body>
</html>

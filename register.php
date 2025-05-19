<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <style>
    body {
      background: #f2f2f2;
      font-family: sans-serif;
      text-align: center;
      padding-top: 50px;
    }
    .container {
      background: white;
      padding: 30px;
      margin: auto;
      width: 300px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input, button {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    a { display: block; margin-top: 15px; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Crear cuenta nueva</h2>
    <form action="signup.php" method="POST">
      <input type="text" name="username" placeholder="Usuario" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Registrarse</button>
    </form>
    <a href="index.php">¿Ya tienes cuenta? Inicia sesión</a>
  </div>
</body>
</html>

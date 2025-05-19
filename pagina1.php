<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      background: linear-gradient(-45deg, #f06, #ff9a00, #00c3ff, #00ff95);
      background-size: 400% 400%;
      animation: gradient 10s ease infinite;
      font-family: sans-serif;
      color: white;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .logout {
      position: absolute;
      top: 20px;
      right: 20px;
    }
    .logout a {
      color: white;
      background: rgba(0,0,0,0.3);
      padding: 10px 15px;
      border-radius: 5px;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="logout"><a href="logout.php">Cerrar sesión</a></div>
  <h1>¡Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
  <p>Estás listo para comenzar tus cursos de dibujo.</p>
</body>
</html>

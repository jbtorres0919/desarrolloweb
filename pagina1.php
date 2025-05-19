<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.html");
    exit;
}
?>

<h2>Estás en otra página protegida</h2>
<p>Usuario: <?php echo $_SESSION["username"]; ?></p>
<p><a href="welcome.php">Volver</a> | <a href="logout.php">Cerrar sesión</a></p>

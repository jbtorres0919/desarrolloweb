<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}
?>
<h2>¡Bienvenido <?php echo $_SESSION["username"]; ?>!</h2>
<p><a href="logout.php">Cerrar sesión</a></p>

<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["username"];
    $clave = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $clave);

    if ($stmt->execute()) {
        echo "✅ Usuario registrado. <a href='index.php'>Iniciar sesión</a>";
    } else {
        echo "❌ Error: usuario ya existe o problema interno.";
    }

    $stmt->close();
}
?>

<h2>Registro de nuevo usuario</h2>
<form method="POST">
    Usuario: <input type="text" name="username" required><br>
    Contraseña: <input type="password" name="password" required><br>
    <input type="submit" value="Registrarse">
</form>

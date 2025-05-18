<?php
require_once '../controllers/AuthController.php';
$auth = new AuthController();

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = $auth->login($_POST['email'], $_POST['password']);
}

include_once '../views/login.php';
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - TaskManager</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="POST" action="">
        <h2>Iniciar Sesión</h2>
        <input type="email" name="email" placeholder="Correo electrónico" required autofocus>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
        <?php if ($error): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
    </form>
</body>
</html>

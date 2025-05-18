<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - TaskManager</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <form method="POST" action="">
        <h2>Iniciar Sesión</h2>
        <input type="email" name="email" placeholder="Correo electrónico" required autofocus>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
        <?php if (!empty($error)): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
    </form>
</body>
</html>

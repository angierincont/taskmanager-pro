<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - TaskManager</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Bienvenido, <?= htmlspecialchars($user_name) ?></h1>
        <a href="../public/logout.php">Cerrar sesión</a>
        <h2>Tareas</h2>
        <?php foreach ($tasks as $task): ?>
            <div class="task">
                <strong><?= htmlspecialchars($task['title']) ?></strong> — Estado: <?= htmlspecialchars($task['status']) ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

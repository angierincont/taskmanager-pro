<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

// Ejemplo simple de tareas estáticas
$tareas = [
    ['id' => 1, 'title' => 'Terminar proyecto', 'status' => 'Pendiente'],
    ['id' => 2, 'title' => 'Enviar reporte', 'status' => 'En progreso'],
    ['id' => 3, 'title' => 'Reunión con cliente', 'status' => 'Completada'],
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - TaskManager</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Bienvenido, <?= htmlspecialchars($_SESSION['user_name'] ?? 'Usuario') ?></h1>
        <a href="logout.php">Cerrar sesión</a>
        <h2>Tareas</h2>
        <?php foreach ($tareas as $tarea): ?>
            <div class="task">
                <strong><?= htmlspecialchars($tarea['title']) ?></strong> — Estado: <?= htmlspecialchars($tarea['status']) ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

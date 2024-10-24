<?php
require_once '../../config/config.php';
require_once '../../models/UserManagementModel.php';
require_once '../../controllers/UserManagementController.php';

$db = getDBConnection();
$userManagementModel = new UserManagementModel($db);
$userManagementController = new UserManagementController($userManagementModel);

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $user = $userManagementModel->getUserById($userId);
    if (!$user) {
        header('Location: index.php?error=Usuario no encontrado');
        exit;
    }
} else {
    header('Location: index.php?error=ID de usuario no proporcionado');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Detalles del Usuario</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($user['first_name'] . ' ' . $user['last_name']); ?></h5>
                <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                <p class="card-text"><strong>Rol:</strong> <?php echo $user['role'] == 1 ? 'Usuario' : 'Admin'; ?></p>
                <p class="card-text"><strong>Creado el:</strong> <?php echo htmlspecialchars($user['created_at']); ?></p>
                <a href="index.php" class="btn btn-primary">Volver a la lista</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
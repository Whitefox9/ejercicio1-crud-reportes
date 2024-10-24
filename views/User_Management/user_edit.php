<?php
require_once '../../config/config.php';
require_once '../../models/UserManagementModel.php';
require_once '../../controllers/UserManagementController.php';

$db = getDBConnection();
$userManagementModel = new UserManagementModel($db);
$userManagementController = new UserManagementController($userManagementModel);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = $userManagementController->updateUser($_POST);
    if ($result['success']) {
        header('Location: index.php?message=' . urlencode($result['message']));
        exit;
    } else {
        $error = $result['message'];
    }
}

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
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Usuario</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="user_edit.php?id=<?php echo $user['id']; ?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <div class="mb-3">
                <label for="first_name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo htmlspecialchars($user['first_name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo htmlspecialchars($user['last_name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Rol</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="1" <?php echo $user['role'] == 1 ? 'selected' : ''; ?>>Usuario</option>
                    <option value="2" <?php echo $user['role'] == 2 ? 'selected' : ''; ?>>Administrador</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
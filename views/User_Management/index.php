<?php
require_once '../../config/config.php';
require_once '../../models/UserManagementModel.php';
require_once '../../controllers/UserManagementController.php';

$db = getDBConnection();
$userManagementModel = new UserManagementModel($db);
$userManagementController = new UserManagementController($userManagementModel);

$users = $userManagementModel->getAllUsers();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/ejercicio1/views/admin/Dashboard.php">Mi Dashboard</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ítems</a>
                    </li>
                </ul>
            </div>
            <a href="../../controllers/logout.php" class="btn btn-danger">Cerrar Sesión</a>
        </div>
    </nav>

    <div class="container mt-4">
    <h2>Reportes</h2>
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Reporte de Usuarios</h5>
            <p class="card-text">Generar un reporte PDF de todos los usuarios registrados.</p>
            <a href="/ejercicio1/reports/generate_user_report.php" class="btn btn-primary btn-sm">Generar Reporte de Usuarios</a>
        </div>
    </div>
    
    <!-- El resto del contenido (tabla de usuarios) permanece igual -->
</div>

    <div class="container mt-4">
        <h1>Gestión de Usuarios</h1>
        <a href="user_create.php" class="btn btn-primary mb-3">Crear Nuevo Usuario</a>
        
        <?php if (isset($_GET['message'])): ?>
            <div class="alert alert-success" role="alert">
                <?php echo htmlspecialchars($_GET['message']); ?>
            </div>
        <?php endif; ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['id']); ?></td>
                    <td><?php echo htmlspecialchars($user['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td><?php echo htmlspecialchars($user['rol']); ?></td>
                    <td>
                        <a href="user_view.php?id=<?php echo $user['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="user_edit.php?id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="user_delete.php?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este usuario?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
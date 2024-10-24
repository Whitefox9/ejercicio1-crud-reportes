<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard CRUD</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Configuración</a>
                    </li>
                    <li class="nav-item">
                    <a href="/ejercicio1/controllers/logout.php" class="btn btn-danger">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 bg-light">
                <div class="d-flex flex-column p-3">
                    <h4>Menú</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ejercicio1/views/User_Management/index.php">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ejercicio1/views/Item_Management/index.php">Ítems</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reportes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Configuración</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Main content -->
            <div class="col-md-9 col-lg-10">
                <div class="container">
                    <h1 class="mb-4">Gestión de Datos</h1>
                    <div class="row">
                        <!-- Card for User Management -->
                        <div class="col-md-4">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-header">Usuarios</div>
                                <div class="card-body">
                                    <h5 class="card-title">Gestionar Usuarios</h5>
                                    <p class="card-text">Administra los usuarios de la plataforma.</p>
                                    <a href="/ejercicio1/views/User_Management/index.php" class="btn btn-light">Administrar Usuarios</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card for Item Management -->
                        <div class="col-md-4">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-header">Ítems</div>
                                <div class="card-body">
                                    <h5 class="card-title">Gestionar Ítems</h5>
                                    <p class="card-text">Administra los ítems de la plataforma.</p>
                                    <a href="/ejercicio1/views/Item_Management/index.php" class="btn btn-light">Administrar Ítems</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-white bg-warning mb-3">
                                <div class="card-header">Reportes</div>
                                <div class="card-body">
                                    <h5 class="card-title">Ver Reportes</h5>
                                    <p class="card-text">Generar y visualizar reportes de la plataforma.</p>
                                    <a href="/reports/generate_user_report.php" class="btn btn-light">Ver Reportes</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Optional: Add a table to display recent activities or summary -->
                    <h2 class="mt-4">Actividades Recientes</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Usuario</th>
                                <th>Acción</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí se mostrarían las actividades recientes -->
                            <tr>
                                <td>2024-09-16</td>
                                <td>Admin</td>
                                <td>Creación de ítem</td>
                                <td>Nuevo ítem: "Producto A" añadido</td>
                            </tr>
                            <tr>
                                <td>2024-09-15</td>
                                <td>Usuario1</td>
                                <td>Actualización de perfil</td>
                                <td>Cambio de correo electrónico</td>
                            </tr>
                            <!-- Más filas de actividades recientes -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
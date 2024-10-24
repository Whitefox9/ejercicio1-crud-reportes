<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes de Usuarios</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Dashboard</a>
            <!-- Agregar más elementos de navegación si es necesario -->
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">Reportes de Usuarios</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios Activos</h5>
                        <p class="card-text">Total de usuarios activos en el sistema.</p>
                        <a href="#" class="btn btn-primary">Ver Reporte</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nuevos Registros</h5>
                        <p class="card-text">Usuarios registrados en el último mes.</p>
                        <a href="#" class="btn btn-primary">Ver Reporte</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <a href="index.php" class="btn btn-secondary">Volver al listado de usuarios</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
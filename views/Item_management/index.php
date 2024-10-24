<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Ítems</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/ejercicio1/views/admin/Dashboard.php">Mi Dashboard</a>
            <!-- Agregar más elementos de navegación si es necesario -->
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">Gestión de Ítems</h1>
        <a href="create_item.php" class="btn btn-primary mb-3">Crear Nuevo Ítem</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se insertarían los datos de los ítems dinámicamente -->
                <tr>
                    <td>1</td>
                    <td>Ítem de Ejemplo</td>
                    <td>Esta es una descripción de ejemplo</td>
                    <td>$19.99</td>
                    <td>
                        <a href="view_item.php?id=1" class="btn btn-info btn-sm">Ver</a>
                        <a href="edit_item.php?id=1" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete_item.php?id=1" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este ítem?')">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
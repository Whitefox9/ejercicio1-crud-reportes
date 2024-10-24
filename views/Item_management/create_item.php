<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Ítem</title>
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
        <h1 class="mb-4">Crear Nuevo Ítem</h1>
        <form action="process_create_item.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Ítem</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoría</label>
                <select class="form-select" id="category" name="category">
                    <option value="">Seleccione una categoría</option>
                    <option value="1">Electrónicos</option>
                    <option value="2">Ropa</option>
                    <option value="3">Hogar</option>
                    <!-- Agregar más categorías según sea necesario -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear Ítem</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
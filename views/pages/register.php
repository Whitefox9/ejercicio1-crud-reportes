<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-5">
                                <h2 class="h3">Registro</h2>
                                <h3 class="fs-6 fw-normal text-secondary m-0">Ingresa tus datos para registrarte</h3>
                            </div>
                        </div>
                    </div>
                    <form action="\ejercicio1\controllers\UserController.php" method="POST">
                        <input type="hidden" name="action" value="register">
                        <div class="row gy-3 gy-md-4 overflow-hidden">
                            <div class="col-12">
                                <label for="first_name" class="form-label">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nombre" required>
                            </div>
                            <div class="col-12">
                                <label for="last_name" class="form-label">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellido" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="nombre@ejemplo.com" required>
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Contraseña <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="col-12">
                                <label for="role" class="form-label">Rol <span class="text-danger">*</span></label>
                                <select class="form-select" name="role" id="role" required>
                                    <option value="">Selecciona un rol</option>
                                    <option value="1">Usuario</option>
                                    <option value="2">Administrador</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                                    <label class="form-check-label text-secondary" for="iAgree">
                                        Acepto los <a href="#!" class="link-primary text-decoration-none">términos y condiciones</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-lg btn-primary" type="submit">Registrarse</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-12">
                            <hr class="mt-5 mb-4 border-secondary-subtle">
                            <div class="col-12">
                                <p class="m-0 text-secondary text-center">¿Ya tienes una cuenta? <a href="login.php" class="link-primary text-decoration-none">Iniciar sesión</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <hr class="mt-5 mb-4 border-secondary-subtle">
                            <div class="col-12">
                                <p class="m-0 text-secondary text-center">Volver al <a href="/ejercicio1/index.php" class="link-primary text-decoration-none">Inicio</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


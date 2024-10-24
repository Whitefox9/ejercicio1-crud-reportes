<?php
require_once __DIR__ . '/../../config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<section class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="text-center mb-3">
                            <a href="#!">
                                <img src="<?php echo BASE_URL; ?>/views/img/bsb-logo.svg" alt="BootstrapBrain Logo" width="175" height="57">
                            </a>
                        </div>
                        <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Iniciar sesión en su cuenta</h2>
                        <?php
                        if (isset($_GET['registered']) && $_GET['registered'] == 'true') {
                            echo '<div class="alert alert-success" role="alert">Registro exitoso. Ahora puedes iniciar sesión.</div>';
                        }
                        if (isset($_GET['error'])) {
                            $error = $_GET['error'];
                            if ($error == 'empty_fields') {
                                echo '<div class="alert alert-danger" role="alert">Por favor, complete todos los campos.</div>';
                            } elseif ($error == 'invalid_credentials') {
                                echo '<div class="alert alert-danger" role="alert">Credenciales inválidas. Por favor, intente de nuevo.</div>';
                            }
                        }
                        ?>
                        <form action="<?php echo BASE_URL; ?>/controllers/UserController.php" method="POST">
                            <input type="hidden" name="action" value="login">
                            <div class="row gy-2 overflow-hidden">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="nombre@ejemplo.com" required>
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password" id="password" value="" placeholder="Contraseña" required>
                                        <label for="password" class="form-label">Contraseña</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid my-3">
                                        <button class="btn btn-primary btn-lg" type="submit">Iniciar sesión</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="m-0 text-secondary text-center">¿No tienes una cuenta? <a href="<?php echo BASE_URL; ?>/views/pages/register.php" class="link-primary text-decoration-none">Registrarse</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
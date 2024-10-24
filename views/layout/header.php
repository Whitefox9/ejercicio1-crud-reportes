<!DOCTYPE html><html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Menu and Carousel Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="src/styles.css">
    </head>
    <body>

    
        
<!-- Navbar -->
<div class="container">
        <div class="row">
            <div class="col-xl-6">
                <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                    <div class="container">
                      <a class="navbar-brand" href="/ejercicio1/index.php">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/ejercicio1/index.php">Inicio</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/ejercicio1/views/pages/Productos.php">Productos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/ejercicio1/views/pages/nosotros.php">Nosotros</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              ingresar
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/ejercicio1/views/pages/login.php">Iniciar Sesion</a></li>
                              <li><a class="dropdown-item" href="/ejercicio1/views/pages/register.php">Registrarse</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
     </div>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
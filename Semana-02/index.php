<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio - MiEmpresa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <!-- Logo e Identidad -->
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="images/logo.png" alt="Logo" height="36" class="me-2">
                    <span>EmpresaLoL</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Empresa</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="empresa.php#quienes-somos">Quiénes somos</a></li>
                                <li><a class="dropdown-item" href="empresa.php#equipo">Nuestro equipo</a></li>
                                <li><a class="dropdown-item" href="empresa.php#mision">Misión</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Acceso</button>
            </div>
        </nav>

<!-- Banner Principal (Hero Section) -->
        <div class="bg-light py-5 text-center border-bottom">
            <div class="container py-4">
                <h1 class="display-5 fw-bold text-dark">Domina la Grieta del Invocador</h1>
                <p class="lead text-muted mt-3">Recarga de RP rápida y segura, skins exclusivas y las mejores guías para subir de división.</p>
                <div class="mt-4">
                    <a href="productos.php" class="btn btn-primary btn-lg me-2">Ver RP y Skins</a>
                    <a href="servicios.php" class="btn btn-outline-secondary btn-lg">Tutoriales y Coaching</a>
                </div>
            </div>
        </div>

        <!-- Secciones destacadas en la Portada -->
        <div class="container py-5">
            <div class="row g-4 text-center">
                <!-- Tarjeta 1: Quiénes Somos -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <h4 class="card-title text-primary">Nuestra Empresa</h4>
                            <p class="card-text text-muted">Conoce a nuestro equipo de gamers, nuestra misión y el compromiso con entregas 100% seguras.</p>
                            <a href="empresa.php" class="btn btn-sm btn-outline-primary mt-2">Saber más</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2: Productos (RP y Skins) -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <h4 class="card-title text-primary">Cofres RP & Skins</h4>
                            <p class="card-text text-muted">Explora nuestras ofertas en Riot Points, pases de evento y regalos directos a tu cuenta.</p>
                            <a href="productos.php" class="btn btn-sm btn-outline-primary mt-2">Ver productos</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3: Servicios (Tutoriales y Guias) -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <h4 class="card-title text-primary">Guías y Coaching</h4>
                            <p class="card-text text-muted">Aprende macrogame, analiza tus partidas con expertos y domina a tu main para salir de Hardstuck.</p>
                            <a href="servicios.php" class="btn btn-sm btn-outline-primary mt-2">Ver tutoriales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="container-fluid bg-dark text-white text-center py-3">
            <strong>EmpresaLoL@2026</strong>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Autenticación</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="empresa.php">
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
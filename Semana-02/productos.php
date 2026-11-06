<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Productos - MiEmpresa</title>
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
                        <li class="nav-item"><a class="nav-link active" href="productos.php">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Acceso</button>
            </div>
        </nav>

        <!-- Header / Banner -->
        <div class="bg-light py-4 border-bottom text-center">
            <div class="container">
                <h1 class="fw-bold">Nuestros Productos</h1>
                <p class="text-muted mb-0">Explora nuestro catálogo de productos.</p>
            </div>
        </div>

        <!-- Container Principal -->
        <div class="container py-5">
            <!-- Carrusel Destacado -->
            <div id="demo" class="carousel slide shadow rounded overflow-hidden mb-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/rp.jpg" alt="Producto 1" class="d-block w-100" style="height: 380px; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Compra de RP</h5>
                            <p>Compra RP mas barato y legal.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/lol.jpg" alt="Producto 2" class="d-block w-100" style="height: 380px; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Tutorial</h5>
                            <p>Aprende a jugar League of Legends con nuestros tutoriales.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/skins.jpg" alt="Producto 3" class="d-block w-100" style="height: 380px; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Skins</h5>
                            <p>Obten skins con metodos de pago diferentes y mediante concursos.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- Grilla de Productos -->
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="images/rp.jpg" class="card-img-top" alt="Producto 1" style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Compra de RP</h5>
                            <p class="card-text text-muted">Compra RP de forma legal y segura.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-3">
                            <a href="contacto.php" class="btn btn-outline-primary w-100">Compra aqui</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="images/lol.jpg" class="card-img-top" alt="Producto 2" style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Tutorial</h5>
                            <p class="card-text text-muted">Aprende a jugar League of Legends con nuestros tutoriales hechos por Grandes Maestros.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-3">
                            <a href="contacto.php" class="btn btn-outline-primary w-100">Aprende</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="images/skins.jpg" class="card-img-top" alt="Producto 3" style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Skins</h5>
                            <p class="card-text text-muted">Obten skins con metodos de pago diferentes y mediante concursos.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-3">
                            <a href="contacto.php" class="btn btn-outline-primary w-100">Obtener skins</a>
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
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Servicios - MiEmpresa</title>
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
                        <li class="nav-item"><a class="nav-link active" href="servicios.php">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Acceso</button>
            </div>
        </nav>

        <!-- Header / Banner -->
        <div class="bg-light py-4 border-bottom text-center">
            <div class="container">
                <h1 class="fw-bold">Nuestros Servicios</h1>
                <p class="text-muted mb-0">Soluciones integrales adaptadas a tus necesidades.</p>
            </div>
        </div>

        <!-- Container principal -->
        <div class="container py-5">
            <div class="row g-4">
                <!-- Servicio 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-2">
                        <div class="card-body">
                            <h4 class="card-title text-primary">Aprende a jugar</h4>
                            <p class="card-text text-muted mt-3">Clases de League of Legends para principiantes y avanzados.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <a href="contacto.php" class="btn btn-outline-primary w-100">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-2">
                        <div class="card-body">
                            <h4 class="card-title text-primary">¿Te faltan manos?</h4>
                            <p class="card-text text-muted mt-3">Diseño personalizado de manos para jugar lol.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <a href="contacto.php" class="btn btn-outline-primary w-100">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-2">
                        <div class="card-body">
                            <h4 class="card-title text-primary">Saber más</h4>
                            <p class="card-text text-muted mt-3">Descubre todo lo que la Grieta del invocador tiene para ti.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <a href="contacto.php" class="btn btn-outline-primary w-100">Consultar</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Llamado a la acción -->
            <div class="bg-light rounded p-4 text-center my-5 shadow-sm">
                <h3>¿Necesitas un servicio personalizado?</h3>
                <p class="text-muted">Escríbenos y cotizaremos una solución a la medida de tus requerimientos.</p>
                <a href="contacto.php" class="btn btn-primary">Ir a Contacto</a>
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
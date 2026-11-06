<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Contacto - MiEmpresa</title>
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
                        <li class="nav-item"><a class="nav-link active" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Acceso</button>
            </div>
        </nav>

        <!-- Header / Banner -->
        <div class="bg-light py-4 border-bottom text-center">
            <div class="container">
                <h1 class="fw-bold">Contáctanos</h1>
                <p class="text-muted mb-0">Déjanos tu mensaje y nos pondremos en contacto contigo a la brevedad.</p>
            </div>
        </div>

        <!-- Container Principal -->
        <div class="container py-5">
            <div class="row g-5">
                <!-- Formulario de Contacto -->
                <div class="col-md-7">
                    <div class="card border-0 shadow-sm p-4">
                        <h4 class="mb-4 text-primary">Envíanos un mensaje</h4>
                        <form action="empresa.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="comment" class="form-label">Comentarios / Consulta:</label>
                                <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Escribe tu mensaje aquí..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>

                <!-- Información de Contacto Adicional -->
                <div class="col-md-5">
                    <div class="bg-light p-4 rounded shadow-sm h-100">
                        <h4 class="mb-4 text-primary">Información de Contacto</h4>
                        
                        <div class="mb-3">
                            <h6>Ubicación</h6>
                            <p class="text-muted">Av. Jarvan III 123, Piso 10<br>Demacia, Runaterra</p>
                        </div>

                        <div class="mb-3">
                            <h6>Correo Electrónico</h6>
                            <p class="text-muted">contacto@empresalol.cl</p>
                        </div>

                        <div class="mb-3">
                            <h6>Teléfono</h6>
                            <p class="text-muted">+56 9 1234 5678</p>
                        </div>

                        <div class="mb-3">
                            <h6>Horario de Atención</h6>
                            <p class="text-muted">Lunes a Viernes: 10:30 - 20:00 hrs</p>
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